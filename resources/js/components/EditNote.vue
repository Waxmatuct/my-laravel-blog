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
                        v-model="content"
                        name="content"
                        id=""
                        rows="20"
                        class="p-2 w-full bg-light-white dark:bg-dark rounded border border-light-white dark:border-dark focus:border focus:border-primary text-sm md:text-base outline-none text-black dark:text-light resize-y leading-6 transition-colors duration-200 ease-in-out"
                    ></textarea>
                </div>
                <div v-show="isActive('viewer')" class="" id="viewer">
                    <div
                        v-html="markdownResult"
                        id=""
                        class="post-content p-5 border border-primary dark:border-primary-darker"
                    ></div>
                </div>
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

export default {
    props: ["note"],
    data() {
        return {
            title: "",
            content: "",
            activeItem: "editor",
        };
    },
    mounted() {
        this.title = this.note.title;
        this.content = this.note.content;
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
    },
};
</script>

<style scoped>
pre {
    background-color: #2f2f2f !important;
}
</style>
