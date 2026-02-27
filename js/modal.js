function mostrarImagem(src) {
  const modal = document.getElementById('modal');
  const modalImg = document.getElementById('modalImg');

  // Esconde modal antes de carregar a nova imagem
  modal.style.display = 'none';

  // Só mostra quando a imagem terminar de carregar
  modalImg.onload = () => {
    modal.style.display = 'block'; // mostra o modal
  };

  modalImg.src = src; // inicia o carregamento
}

// Fecha modal ao clicar nele
function fecharModal() {
  const modal = document.getElementById('modal');
  modal.style.display = 'none';
}

document.getElementById('modal').addEventListener('click', fecharModal);