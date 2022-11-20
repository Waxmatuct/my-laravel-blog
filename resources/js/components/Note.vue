<template>
    <div class="post-block w-full flex flex-col space-y-3">
        <h2 class="post-title font-bold font-header text-base sm:text-lg sm:leading-none">
            <a class="text-black dark:text-light-gray hover:text-primary dark:hover:text-primary-darker border-0"
               :href="/notes/+note.id">{{ note.title }}</a>
        </h2>

        <section class="note text-sm md:leading-tight max-h-80 overflow-hidden" v-html="markdownResult">
        </section>

        <div class="flex items-center space-x-5 text-xs">
                            <span>
                                <time>{{ moment(note.created_at).locale("ru").format('D MMM, dddd') }}</time>
                            </span>
            <a :href="'/notes/'+note.id+'/edit'">Править</a>
            <form action="" method="POST">
                @csrf
                @method('DELETE')
                <button
                    type="submit"
                    class="text-primary dark:text-primary-darker border-b border-primary hover:border-black dark:hover:border-light hover:text-black dark:hover:text-light border-opacity-30 dark:border-opacity-30 transition duration-300 ease-in-out">
                    Удалить
                </button>
            </form>
        </div>

    </div>
</template>

<script>
import moment from "moment";
import {marked} from "marked";
import DOMPurify from "dompurify";

export default {
    name: "Note",
    props: ["note"],
    data() {
        return {
            moment: moment,
        };
    },
    computed: {
        markdownResult() {
            return DOMPurify.sanitize(marked(this.note.content));
        },
    },
}
</script>
