<header class="relative bg-white/90 backdrop-blur-xl sticky top-0 z-40 border-b border-gray-100 shadow-sm">
    <!-- Subtle gradient underline (matches footer) -->
    <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-18">

            <!-- Logo (Matches footer branding style) -->
            <a href="index.php" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-500/20 transition-transform duration-300 group-hover:scale-105">
                    <i class="fas fa-code text-white text-lg"></i>
                </div>
                <span class="text-xl font-bold text-gray-900">Iqbolshoh<span class="text-indigo-600">Dev</span></span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-1">
                <a href="index.php" class="relative px-4 py-2 text-sm font-medium text-gray-900 bg-gray-100 rounded-lg transition-colors duration-300">
                    Bosh sahifa
                </a>
                <a href="loyhalar.php" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition-colors duration-300">
                    Loyihalar
                </a>
            </nav>

            <!-- Desktop CTA / Contact -->
            <div class="hidden md:flex items-center gap-4">
                <a href="tel:+998776030033" class="flex items-center gap-2 text-sm text-gray-500 hover:text-indigo-600 transition-colors duration-300">
                    <i class="fas fa-phone-alt text-indigo-500 text-xs"></i>
                    <span class="font-medium">+998 77 603 00 33</span>
                </a>
                <a href="https://t.me/iqbolshoh_777" class="inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white text-sm font-medium rounded-xl shadow-lg shadow-indigo-500/25 hover:shadow-indigo-500/40 transition-all duration-300 hover:-translate-y-0.5">
                    Bog'lanish
                    <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </a>
            </div>

            <!-- Mobile menu button (Hamburger) -->
            <div class="md:hidden flex items-center">
                <button id="mobileMenuBtn" class="relative w-10 h-10 flex items-center justify-center text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-xl transition-colors duration-300 focus:outline-none">
                    <i id="menuIconOpen" class="fas fa-bars text-xl"></i>
                    <i id="menuIconClose" class="fas fa-times text-xl hidden"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobileMenu" class="md:hidden hidden border-t border-gray-100 mt-2 pb-4 pt-2 space-y-1 animate-fade-in">
            <a href="index.php" class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm font-medium text-gray-900 bg-indigo-50">
                <i class="fas fa-home text-indigo-500 w-5 text-center"></i>
                Bosh sahifa
            </a>
            <a href="loyhalar.php" class="flex items-center gap-3 px-3 py-3 rounded-xl text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">
                <i class="fas fa-folder-open text-gray-400 w-5 text-center"></i>
                Loyihalar
            </a>
            <div class="pt-3 px-3">
                <a href="#contact" class="flex items-center justify-center gap-2 w-full py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-medium rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
                    Bog'lanish
                    <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu Toggle Script -->
<script>
    (function() {
        const btn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('mobileMenu');
        const iconOpen = document.getElementById('menuIconOpen');
        const iconClose = document.getElementById('menuIconClose');

        if (btn && menu && iconOpen && iconClose) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                iconOpen.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
            });

            // Optional: Close mobile menu when clicking a link
            menu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    iconOpen.classList.remove('hidden');
                    iconClose.classList.add('hidden');
                });
            });
        }
    })();
</script>

<!-- Add this CSS to your stylesheet for the fade-in animation -->
<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.25s ease-out;
    }
</style>