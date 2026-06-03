console.log("JS carregado!");
// Aguarda o carregamento da página
document.addEventListener("DOMContentLoaded", () => {

    const celular = document.getElementById("celular");

    celular.addEventListener("input", function () {

        // Remove tudo que não for número
        let valor = this.value.replace(/\D/g, "");

        // Limita a 11 dígitos
        valor = valor.slice(0, 11);

        // Aplica a máscara (XX) XXXXX-XXXX
        if (valor.length > 2) {
            valor = valor.replace(/^(\d{2})(\d)/, "($1) $2");
        }

        if (valor.length > 10) {
            valor = valor.replace(/(\d{5})(\d)/, "$1-$2");
        }

        this.value = valor;
    });

});