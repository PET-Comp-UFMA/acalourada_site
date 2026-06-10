//Menu mobile
const btn = document.querySelector(".site-toggler");
const menu = document.querySelector(".site-navbar");

btn.addEventListener("click", () => {
    menu.classList.toggle("active");

    btn.innerHTML =
        menu.classList.contains("active")
            ? "✕"
            : "☰";
});