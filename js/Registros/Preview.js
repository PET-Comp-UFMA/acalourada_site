const banner = document.getElementById("banner-registros");

const btnDia1 = document.getElementById("dia1");
const btnDia2 = document.getElementById("dia2");
const btnDia3 = document.getElementById("dia3");

btnDia1.addEventListener("click", () => {

    banner.src = "img/registros/2026.2/BannerRegistrosDia1.png";

    btnDia1.classList.add("ativo");
    btnDia2.classList.remove("ativo");
    btnDia3.classList.remove("ativo");
});

btnDia2.addEventListener("click", () => {

    banner.src = "img/registros/2026.2/BannerRegistrosDia2.png";

    btnDia1.classList.remove("ativo");
    btnDia2.classList.add("ativo");
    btnDia3.classList.remove("ativo");
});

btnDia3.addEventListener("click", () => {

    banner.src = "img/registros/2026.2/BannerRegistrosDia3.png";

    btnDia1.classList.remove("ativo");
    btnDia2.classList.remove("ativo");
    btnDia3.classList.add("ativo");
});