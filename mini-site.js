// ===== script.js =====

// Toggle entre le mode clair et sombre
const toggleBtn = document.getElementById('themeToggle');

// Vérifie si l'utilisateur a déjà activé le dark mode
if (localStorage.getItem('theme') === 'dark') {
  document.body.classList.add('dark-mode');
}

// Gère le clic sur le bouton
toggleBtn.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');

  // Sauvegarder le choix dans le localStorage
  if (document.body.classList.contains('dark-mode')) {
    localStorage.setItem('theme', 'dark');
  } else {
    localStorage.setItem('theme', 'light');
  }
});
