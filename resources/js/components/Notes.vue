<template>
    <div class="inner w-full mx-auto md:my-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
        <note class="posts flex flex-wrap md:flex-nowrap pb-5 border-b-2 border-gray border-opacity-10"
              v-for="note in notes"
              :key="note.id"
              :note="note"
        >
        </note>
    </div>
</template>

<script>
import Note from "./Note.vue";

export default {
    name: "Notes",
    props: ["notes"],
    components: {
        Note,
    },
    // mounted() {
    //     this.markdownResult();
    // },
    // computed: {
    //     markdownResult() {
    //         return DOMPurify.sanitize(marked(note.content));
    //     },
    // }

}
</script>

