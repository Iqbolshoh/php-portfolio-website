<header
    class="bg-white/80 backdrop-blur-md sticky top-0 z-30 shadow-sm border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a
                href="index.php"
                class="text-xl font-bold tracking-tight text-gray-900 hover:text-gray-700 transition">
                <i class="fas fa-code text-indigo-600 mr-2"></i>Iqbolshoh<span
                    class="text-indigo-600">Dev</span>
            </a>
            <!-- Desktop nav -->
            <nav class="hidden sm:flex space-x-8 text-sm font-medium">
                <a
                    href="index.php"
                    class="text-gray-900 font-semibold border-b-2 border-gray-900 pb-1">Bosh sahifa</a>
                <a
                    href="loyhalar.php"
                    class="text-gray-600 hover:text-gray-900 transition">Loyihalar</a>
            </nav>
            <!-- Mobile menu toggle -->
            <div class="sm:hidden flex items-center">
                <button
                    id="mobileMenuBtn"
                    class="text-gray-700 focus:outline-none p-2">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobileMenu" class="sm:hidden hidden pb-3 pt-1 space-y-2">
            <a href="index.php" class="block text-gray-900 font-semibold py-2">Bosh sahifa</a>
            <a href="loyhalar.php" class="block text-gray-600 py-2">Loyihalar</a>
        </div>
    </div>
</header>

<!-- Mobile menu script -->
<script>
    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    }
</script>