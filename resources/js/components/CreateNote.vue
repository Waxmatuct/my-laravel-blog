<template>
    <form @submit.prevent="addNote">
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
            <button class="button" type="submit">Отправить</button>
        </div>
    </form>
</template>

<script>
import { marked } from "marked";
import DOMPurify from "dompurify";

export default {
    data() {
        return {
            title: "",
            content: "",
            activeItem: "editor",
        };
    },
    mounted() {
        // console.log("It's working");
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
        addNote() {
            axios
                .post("/notes", {
                    title: this.title,
                    content: this.content,
                })
                .then((response) => {
                    location.href = "/notes";
                })
                .catch((error) => alert("Ошибка"));
        },
    },
};
</script>

<style>
pre {
    background: #2f2f2f;
}
</style>
