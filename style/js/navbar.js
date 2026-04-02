// Fonction responsive du Navbar

    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('menu-icon');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        // Optionnel : changer l'icône de menu à "close" si vous utilisez Material Icons
        icon.textContent = menu.classList.contains('hidden') ? '☰' : 'X';
    });

    // Fermer le menu si on clique à l'extérieur (optionnel mais recommandé)
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            menu.classList.add('hidden');
            icon.textContent = 'menu';
        }
    });
    
////