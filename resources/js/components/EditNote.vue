<template>
    <form @submit.prevent="editNote">
        <div class="">
            <label class="leading-7 block text-sm text-gray-600" for="title">
                Заголовок
            </label>
            <input
                class="w-full bg-light-white dark:bg-dark rounded border border-light-white dark:border-dark focus:border focus:border-primary text-base outline-none text-black dark:text-light py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                id="title"
                name="title"
                type="text"
                aria-label="Title"
                v-model="title"
            />
        </div>

        <div class="mt-5">
            <div class="flex text-sm space-x-5 py-1 px-2">
                <a
                    href="#editor"
                    @click.prevent="setActive('editor')"
                    class="border-0"
                >
                    Пост
                </a>
                <span>|</span>
                <a
                    href="#viewer"
                    @click.prevent="setActive('viewer')"
                    class="border-0"
                >
                    Просмотр
                </a>
            </div>
            <div>
                <div v-show="isActive('editor')" class="" id="editor">
                    <textarea
                        ref="my-textarea"
                        v-model="content"
                        name="content"
                        id=""
                        rows="13"
                        class="p-3 w-full bg-light-white dark:bg-dark rounded border border-light-white dark:border-dark focus:border focus:border-primary text-sm md:text-base outline-none text-black dark:text-light resize-y leading-6 transition-colors duration-200 ease-in-out"
                    ></textarea>
                </div>
                <div v-show="isActive('viewer')" class="" id="viewer">
                    <div
                        v-html="markdownResult"
                        id=""
                        class="post-content px-5 border border-primary dark:border-primary-darker"
                    ></div>
                </div>
            </div>
        </div>
        <div class="mt-6">
            <label class="leading-7 block text-sm text-gray-600" for="title">
                Дропзона
            </label>
            <div class="flex space-x-5 items-start">
                <div
                    ref="dropzone"
                    class="p-5 w-full flex flex-col md:flex-row items-center justify-center space-y-5 md:space-y-0 md:space-x-5 bg-light-white dark:bg-dark rounded text-sm md:text-base outline-none text-black dark:text-light-gray"
                ></div>
                <button class="button" @click.prevent="storeImage">
                    Загрузить
                </button>
            </div>
        </div>
        <div class="mt-6">
            <button class="button" type="submit">Отправить</button>
        </div>
    </form>
</template>

<script>
import { marked } from "marked";
import DOMPurify from "dompurify";
import { Dropzone } from "dropzone";

export default {
    props: ["note"],
    data() {
        return {
            title: "",
            content: "",
            activeItem: "editor",
            dropzone: null,
            // http: window.location.protocol,
            // hostname: window.location.hostname,
        };
    },
    mounted() {
        this.title = this.note.title;
        this.content = this.note.content;
        this.dropzone = new Dropzone(this.$refs.dropzone, {
            url: "/image/upload",
            autoProcessQueue: false,
            addRemoveLinks: true,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        this.currentDate();
    },
    computed: {
        markdownResult() {
            return DOMPurify.sanitize(marked(this.content));
        },
    },
    methods: {
        isActive(menuItem) {
            return this.activeItem === menuItem;
        },
        setActive(menuItem) {
            this.activeItem = menuItem;
        },
        editNote() {
            axios
                .patch("/notes/" + `${this.note.id}`, {
                    title: this.title,
                    content: this.content,
                })
                .then((response) => {
                    console.log(response);
                    location.href = "/notes/" + `${this.note.id}`;
                })
                .catch((error) => alert("Ошибка"));
        },
        currentDate() {
            const current = new Date();
            const date = `${current.getFullYear()}/${current.getMonth() + 1}`;
            return date;
        },
        storeImage() {
            const files = this.dropzone.getAcceptedFiles();
            this.dropzone.processQueue();
            const textarea = this.$refs["my-textarea"].value;
            const stringArray = [];
            files.forEach((file) => {
                const data =
                    "![Описание](" +
                    window.location.protocol +
                    "//" +
                    window.location.hostname +
                    "/storage/images/" +
                    this.currentDate() +
                    "/" +
                    file.name +
                    ")";
                stringArray.push(data);
            });
            const images = stringArray.join("\r\n");
            this.content = textarea + images;
            this.$refs["my-textarea"].focus();
        },
    },
};
</script>

<style>
pre {
    background: #2f2f2f;
}
.dz-success-mark,
.dz-error-mark {
    display: none;
}
.dz-image img {
    margin: 0 auto;
}
</style>
