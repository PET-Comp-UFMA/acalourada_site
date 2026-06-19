document.addEventListener("DOMContentLoaded", () => {
    const celular = document.getElementById("celular");
    const formulario = document.querySelector("form");
    const botao = document.getElementById("btnRegistrar");
    const containerBotao = document.querySelector(".container-botao");
    

    function verificarFormulario() {
        const nome = document.getElementById("nome").value.trim();
        const celularValor = document.getElementById("celular").value.trim();
        const email = document.getElementById("email").value.trim();
        const interesses = document.getElementById("interesses").value.trim();
        const expectativa = document.querySelector('input[name="expectativa"]:checked');

        const formularioValido =
            nome !== "" &&
            celularValor !== "" &&
            email !== "" &&
            interesses !== "" &&
            expectativa !== null;

        botao.disabled = !formularioValido;

        if(formularioValido){
            containerBotao.classList.remove("incompleto");
        }
        else{
            containerBotao.classList.add("incompleto");
        }
    }

    celular.addEventListener("input", function () {
        // Remove tudo que nao for numero.
        let valor = this.value.replace(/\D/g, "");

        // Limita a 11 digitos.
        valor = valor.slice(0, 11);

        // Aplica a mascara (XX) XXXXX-XXXX.
        if (valor.length > 2) {
            valor = valor.replace(/^(\d{2})(\d)/, "($1) $2");
        }

        if (valor.length > 10) {
            valor = valor.replace(/(\d{5})(\d)/, "$1-$2");
        }

        this.value = valor;
        verificarFormulario();
    });

    formulario.addEventListener("input", verificarFormulario);
    formulario.addEventListener("change", verificarFormulario);
    verificarFormulario();

    document.getElementById('form-inscricao').addEventListener('submit', function(event){
        event.preventDefault();
        const form = event.target;
        const btnSubmit = document.getElementById('btnRegistrar');
        const nome = document.getElementById('nome').value;
    
        btnSubmit.innerText = "Enviando...";
        btnSubmit.disabled = true;
    
        const formData = new FormData(form);
    
        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "sucesso" || data.status === "duplicado") {
                
                if (data.status === "duplicado") {
                    alert(data.mensagem);
                }

                document.getElementById('card-form').style.display = 'none';
                
                document.getElementById('nome-participante').innerText = data.nome_calouro;

                var containerQR = document.getElementById('qrcode-container');
                containerQR.innerHTML = ""; 

                new QRCode(containerQR, {
                    text: data.ticket_id,
                    width: 220,
                    height: 220,
                    colorDark: "#000000",
                    colorLight: "#FFFFFF",
                    correctLevel: QRCode.CorrectLevel.H
                });
                
                document.getElementById('card-qrcode').style.display = 'block';

            } else if (data.status === "erro") {
                alert(data.mensagem);
                btnSubmit.innerText = "REGISTRAR";
                btnSubmit.disabled = false;
            }
        })
        .catch(error => {
            alert('Ocorreu um erro de conexão. Tente novamente.');
            btnSubmit.innerText = "REGISTRAR";
            btnSubmit.disabled = false;
            console.error(error);
        });
    }); 
    document.getElementById('btn-download').addEventListener('click', function() {
        const img = document.querySelector('#qrcode-container img');

        if (img && img.src) {
            const link = document.createElement('a');
            link.href = img.src;
            link.download = 'qrcode-acalourada.png';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
        else{
            alert("Erro: O QR Code ainda não foi gerado.");
        }
    });

    document.getElementById('btn-compartilhar').addEventListener('click', async function() {
        const img = document.querySelector('#qrcode-container img');

        if(!img || !img.src) {
            alert("Erro: O QR Code ainda não foi gerado.");
            return;
        }

        try {
            const response = await fetch(img.src);
            const blob = await response.blob();
            const file = new File([blob], 'qrcode-acalourada.png', { type: blob.type });

            const shareData = {
                title: 'QR Code - Acalourada',
                text: 'Aqui está meu QR Code para a Acalourada do PETComp!',
                files: [file]
            };

            if (navigator.canShare && navigator.canShare({ files: [file] })) {
                await navigator.share(shareData);
            } else {
                await navigator.share({
                    title: 'Meu QR Code - Acalourada',
                    text: 'Já realizei minha inscrição para a Acalourada do PETComp!'
                });
            }
        } catch(err){
            console.log('Compartilhamento cancelado ou falhou:', err);
        }
    });
});


