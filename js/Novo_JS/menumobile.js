// Menu mobile principal
const btn = document.querySelector(".site-toggler");
const menu = document.querySelector(".site-navbar");

btn.addEventListener("click", () => {
    menu.classList.toggle("active");
    btn.innerHTML = menu.classList.contains("active") ? "✕" : "☰";
});

// Controle do Dropdown de VERSÕES no mobile
const dropdownToggle = document.querySelector(".dropdown-toggle");
const dropdownMenu = document.querySelector(".site-dropdown");

if (dropdownToggle && dropdownMenu) {
    dropdownToggle.addEventListener("click", (e) => {
        // Aplica o comportamento de clique apenas no mobile (telas até 770px)
        if (window.innerWidth <= 770) {
            e.preventDefault(); // Evita que a página role para o topo ao clicar no "#"
            dropdownMenu.classList.toggle("active");
        }
    });
}