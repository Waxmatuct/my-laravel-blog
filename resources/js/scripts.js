import Editor from "@toast-ui/editor";
// import "codemirror/lib/codemirror.css";
import "@toast-ui/editor/dist/toastui-editor.css"; // Editor's Style
import "@toast-ui/editor/dist/theme/toastui-editor-dark.css"; // Editor's Style

const editor = new Editor({
    el: document.querySelector("#editor"),
    height: "500px",
    initialEditType: "markdown",
    theme: "dark",
});

document.querySelector("#createPostForm").addEventListener("submit", (e) => {
    e.preventDefault();
    document.querySelector("#content").value = editor.getMarkdown();
    e.target.submit();
});

document.getElementById("switchTheme").addEventListener("click", function () {
    let htmlClasses = document.querySelector("html").classList;

    if (localStorage.theme == "dark") {
        htmlClasses.remove("dark");

        localStorage.removeItem("theme");

        this.checked = false;
    } else {
        htmlClasses.add("dark");

        localStorage.theme = "dark";

        this.checked = true;
    }
});
