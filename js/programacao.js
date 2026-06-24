function toggleCard(el) {
  const isOpen = el.classList.contains('open');
  // close all others
  document.querySelectorAll('.schedule-item.open').forEach(c => c.classList.remove('open'));
  if (!isOpen) el.classList.add('open');
}

document.querySelectorAll('.schedule-item').forEach(card => {
  card.addEventListener('keydown', e => {
    if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); toggleCard(card); }
  });
});