require("./bootstrap");

import Vue from "vue";

window.onload = function () {
    // const sw = new Vue({
    //     el: "#switcher",
    //     components: {
    //         SwitcherComponent: () =>
    //             import("./components/SwitcherComponent.vue"),
    //     },
    // });

    const CreateNote = new Vue({
        el: "#note-crud",
        components: {
            CreateNote: () => import("./components/CreateNote.vue"),
            EditNote: () => import("./components/EditNote.vue"),
        },
    });
};
