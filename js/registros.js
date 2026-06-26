const banner = document.getElementById("banner-registros");

const btnDia1 = document.getElementById("dia1");
const btnDia2 = document.getElementById("dia2");
const btnDia3 = document.getElementById("dia3");

const tablet = document.getElementById("abrir-modal");
const modal = document.getElementById("modal-dia");
const btnFechar = document.getElementById("fechar-modal");
const boxFotos = document.getElementById("boxFotos");

// ------------------------------------------------------------------------------
// SELECIONAR DIA MUDANDO CSS E PREVIEW
// ------------------------------------------------------------------------------

let diaAtual = 1;

btnDia1.addEventListener("click", () => {

    diaAtual = 1;
    // banner.src = "img/registros/2026.2/BannerRegistrosDia1.png";
    banner.src = "img/registros/2026.2/BannerRegistrosEmBreve.svg";

    btnDia1.classList.add("ativo");
    btnDia2.classList.remove("ativo");
    btnDia3.classList.remove("ativo");

});

btnDia2.addEventListener("click", () => {

    diaAtual = 2;
    // banner.src = "img/registros/2026.2/BannerRegistrosDia2.png";
    banner.src = "img/registros/2026.2/BannerRegistrosEmBreve.svg";

    btnDia1.classList.remove("ativo");
    btnDia2.classList.add("ativo");
    btnDia3.classList.remove("ativo");

});

btnDia3.addEventListener("click", () => {

    diaAtual = 3;
    // banner.src = "img/registros/2026.2/BannerRegistrosDia3.png";
    banner.src = "img/registros/2026.2/BannerRegistrosEmBreve.svg";

    btnDia1.classList.remove("ativo");
    btnDia2.classList.remove("ativo");
    btnDia3.classList.add("ativo");

});

// ------------------------------------------------------------------------------
// AREA CLICLAVEL DO TABLET
// ------------------------------------------------------------------------------

banner.addEventListener("click", (e) => {

    const x = (e.offsetX / banner.clientWidth) * 100;
    const y = (e.offsetY / banner.clientHeight) * 100;

    // console.log("X%:", x.toFixed(2), "Y%:", y.toFixed(2));

    if (
        x >= 30 &&
        x <= 51 &&
        y >= 37 &&
        y <= 62
    ) {
        // boxFotos.src = `img/registros/2026.2/BannerRegistrosDia${diaAtual}.png`;
        boxFotos.src = "img/registros/2026.2/BoxFotos.png";
        modal.style.display = "flex";
    }

});

btnFechar.addEventListener("click", () => {

    modal.style.display = "none";

});

modal.addEventListener("click", (e) => {

    if(e.target === modal){

        modal.style.display = "none";

    }

});