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
