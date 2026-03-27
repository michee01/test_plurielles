<header id="main-header"
    class="fixed top-0 w-full z-50 bg-white/95 backdrop-blur-md border-b border-gray-200 transition-all duration-300 shadow-sm">

    <div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">

        <a href="index.php" class="flex items-center gap-3 group shrink-0">
            <div class="w-25 h-13 bg-black flex items-center justify-center rounded-md transition-transform duration-300 group-hover:scale-105 border border-[#D4AF37]">
                <img src="images/logo/logo-02.png" alt="Logo" class="h-full w-full object-contain">
            </div>
            <span class="text-xl font-black tracking-tighter text-black uppercase font-sans">
                Pluri'elles <span class="text-[#D4AF37] italic">SAS</span>
            </span>
        </a>

        <nav class="hidden lg:flex items-center gap-8">
            <a href="index.php" class="font-bold text-black hover:text-[#D4AF37] transition-colors duration-200 py-2 relative group">
                Accueil
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#D4AF37] transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="about.php" class="font-bold text-black hover:text-[#D4AF37] transition-colors duration-200 py-2 relative group">
                Qui sommes-nous
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#D4AF37] transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="services.php" class="font-bold text-black hover:text-[#D4AF37] transition-colors duration-200 py-2 relative group">
                Services
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#D4AF37] transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="news.php" class="font-bold text-black hover:text-[#D4AF37] transition-colors duration-200 py-2 relative group">
                Actualités
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#D4AF37] transition-all duration-300 group-hover:w-full"></span>
            </a>
        </nav>

        <div class="flex items-center gap-4">
            <a href="contact.php"
                class="hidden md:inline-flex bg-black text-[#D4AF37] border border-[#D4AF37] px-6 py-2 rounded-full font-bold text-sm uppercase tracking-widest hover:bg-[#D4AF37] hover:mr-2 hover:text-black transition-all duration-300 shadow-md">
                Nous contacter
            </a>

            <button id="menu-btn" type="button"
                class="lg:hidden p-2 text-black hover:bg-gray-100 rounded-lg transition-colors">
                <span id="menu-icon" class="material-symbols-outlined text-3xl">☰</span>
            </button>
        </div>
    </div>

    <div id="mobile-menu"
        class="hidden lg:hidden bg-black text-white w-full absolute top-full left-0 border-t border-[#D4AF37]/30 shadow-2xl">
        <div class="px-8 py-10 flex flex-col gap-6">
            <a href="index.php" class="text-xl font-bold hover:text-[#D4AF37] transition-colors">Accueil</a>
            <a href="about.php" class="text-xl font-bold hover:text-[#D4AF37] transition-colors">Qui sommes-nous</a>
            <a href="services.php" class="text-xl font-bold hover:text-[#D4AF37] transition-colors">Services</a>
            <a href="news.php" class="text-xl font-bold hover:text-[#D4AF37] transition-colors">Actualités</a>
            
            <hr class="border-[#D4AF37]/20 my-2">
            
            <a href="contact.php"
                class="w-full text-center bg-[#D4AF37] text-black py-4 rounded-lg font-bold uppercase tracking-widest shadow-lg">
                Nous contacter
            </a>
        </div>
    </div>
</header>

<script>
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
</script>