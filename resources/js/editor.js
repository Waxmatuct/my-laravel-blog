import Editor from "@toast-ui/editor";
// import "codemirror/lib/codemirror.css";
import "@toast-ui/editor/dist/toastui-editor.css"; // Editor's Style
import "@toast-ui/editor/dist/theme/toastui-editor-dark.css"; // Editor's Style
import "@toast-ui/editor/dist/i18n/ru-ru";

const editor = new Editor({
    el: document.querySelector("#editor"),
    height: "400px",
    initialEditType: "markdown",
    theme: "dark",
    language: "ru",
    hideModeSwitch: true,
    toolbarItems: [
        // ["bold", "italic", "strike"],
        // ["ul", "ol", "indent", "outdent"],
        ["table", "link", "image"],
    ],
});

document.querySelector("#createPostForm").addEventListener("submit", (e) => {
    e.preventDefault();
    document.querySelector("#content").value = editor.getMarkdown();
    e.target.submit();
});
