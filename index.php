<!doctype html>
<html lang="uz">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio · Iqbolshoh | Bosh sahifa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <style>
      html {
        scroll-behavior: smooth;
      }
      body {
        background: #f8fafc;
        font-family:
          "Inter",
          system-ui,
          -apple-system,
          sans-serif;
      }
    </style>
  </head>
  <body class="antialiased text-gray-800">
    <div class="min-h-screen flex flex-col">
      <!-- Header -->
      <header
        class="bg-white/80 backdrop-blur-md sticky top-0 z-30 shadow-sm border-b border-gray-200"
      >
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a
              href="index.php"
              class="text-xl font-bold tracking-tight text-gray-900 hover:text-gray-700 transition"
            >
              <i class="fas fa-code text-indigo-600 mr-2"></i>Iqbolshoh<span
                class="text-indigo-600"
                >Dev</span
              >
            </a>
            <!-- Desktop nav -->
            <nav class="hidden sm:flex space-x-8 text-sm font-medium">
              <a
                href="index.php"
                class="text-gray-900 font-semibold border-b-2 border-gray-900 pb-1"
                >Bosh sahifa</a
              >
              <a
                href="loyhalar.php"
                class="text-gray-600 hover:text-gray-900 transition"
                >Loyihalar</a
              >
            </nav>
            <!-- Mobile menu toggle -->
            <div class="sm:hidden flex items-center">
              <button
                id="mobileMenuBtn"
                class="text-gray-700 focus:outline-none p-2"
              >
                <i class="fas fa-bars text-xl"></i>
              </button>
            </div>
          </div>
          <!-- Mobile menu -->
          <div id="mobileMenu" class="sm:hidden hidden pb-3 pt-1 space-y-2">
            <a href="index.php" class="block text-gray-900 font-semibold py-2"
              >Bosh sahifa</a
            >
            <a href="loyhalar.php" class="block text-gray-600 py-2"
              >Loyihalar</a
            >
          </div>
        </div>
      </header>

      <!-- Main Content -->
      <main class="flex-grow">
        <!-- Hero Section -->
        <section
          class="relative overflow-hidden bg-gradient-to-br from-white via-indigo-50/40 to-white py-16 md:py-24"
        >
          <div
            class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-10"
          >
            <div class="flex-1 text-center md:text-left">
              <span
                class="inline-block bg-indigo-100 text-indigo-700 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide mb-4"
              >
                Frontend · 4+ yil tajriba
              </span>
              <h1
                class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight"
              >
                Salom, men <span class="text-indigo-600">Iqbolshoh</span> <br />
                ijodiy dasturchiman
              </h1>
              <p class="mt-5 text-lg text-gray-600 max-w-xl">
                Zamonaviy veb-interfeyslar, toza kod va foydalanuvchi
                tajribasiga e'tibor qarataman. React, Tailwind CSS va Node.js
                bilan ishlayman.
              </p>
              <div
                class="mt-7 flex flex-wrap gap-4 justify-center md:justify-start"
              >
                <a
                  href="loyhalar.php"
                  class="inline-flex items-center bg-gray-900 text-white px-6 py-3 rounded-full font-medium hover:bg-gray-800 transition shadow-md"
                >
                  Loyihalarim <i class="fas fa-arrow-right ml-2 text-sm"></i>
                </a>
                <a
                  href="mailto:Iqbolshoh@example.com"
                  class="inline-flex items-center border border-gray-300 text-gray-800 px-6 py-3 rounded-full font-medium hover:bg-gray-100 transition"
                >
                  <i class="far fa-envelope mr-2"></i> Bog'lanish
                </a>
              </div>
            </div>
            <div class="flex-1 flex justify-center md:justify-end">
              <div
                class="relative w-64 h-64 sm:w-72 sm:h-72 bg-gradient-to-tr from-indigo-400 to-purple-500 rounded-full p-1 shadow-2xl"
              >
                <div
                  class="w-full h-full bg-white rounded-full flex items-center justify-center text-6xl font-bold text-indigo-600 select-none"
                >
                  <i class="fas fa-user-astronaut"></i>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Stats -->
        <section class="py-12 bg-white border-y border-gray-100">
          <div
            class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-center"
          >
            <div class="p-4">
              <div class="text-3xl font-bold text-indigo-600">20+</div>
              <div class="text-gray-500 text-sm">Loyihalar</div>
            </div>
            <div class="p-4">
              <div class="text-3xl font-bold text-indigo-600">12</div>
              <div class="text-gray-500 text-sm">Xalqaro mijozlar</div>
            </div>
            <div class="p-4">
              <div class="text-3xl font-bold text-indigo-600">4+</div>
              <div class="text-gray-500 text-sm">Yillik tajriba</div>
            </div>
            <div class="p-4">
              <div class="text-3xl font-bold text-indigo-600">100%</div>
              <div class="text-gray-500 text-sm">Sifat kafolati</div>
            </div>
          </div>
        </section>

        <!-- Skills -->
        <section class="py-16 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2
            class="text-2xl md:text-3xl font-bold text-gray-900 mb-10 text-center"
          >
            Asosiy texnologiyalar
          </h2>
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5">
            <div
              class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center gap-2 hover:shadow-md transition"
            >
              <i class="fab fa-html5 text-3xl text-orange-500"></i>
              <span class="font-medium">HTML5</span>
            </div>
            <div
              class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center gap-2 hover:shadow-md transition"
            >
              <i class="fab fa-css3-alt text-3xl text-blue-500"></i>
              <span class="font-medium">CSS3 / Tailwind</span>
            </div>
            <div
              class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center gap-2 hover:shadow-md transition"
            >
              <i class="fab fa-js-square text-3xl text-yellow-500"></i>
              <span class="font-medium">JavaScript</span>
            </div>
            <div
              class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center gap-2 hover:shadow-md transition"
            >
              <i class="fab fa-react text-3xl text-cyan-500"></i>
              <span class="font-medium">React</span>
            </div>
            <div
              class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center gap-2 hover:shadow-md transition"
            >
              <i class="fab fa-node-js text-3xl text-green-600"></i>
              <span class="font-medium">Node.js</span>
            </div>
          </div>
        </section>
      </main>

      <!-- Footer -->
      <footer class="bg-white border-t border-gray-200 mt-auto">
        <div
          class="max-w-6xl mx-auto px-4 py-6 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between text-sm text-gray-500"
        >
          <div>
            <i class="far fa-copyright"></i> 2026 IqbolshohDev. Barcha huquqlar
            himoyalangan.
          </div>
          <div class="flex space-x-5 mt-3 sm:mt-0">
            <a href="#" class="hover:text-gray-800 transition"
              ><i class="fab fa-github text-lg"></i
            ></a>
            <a href="#" class="hover:text-gray-800 transition"
              ><i class="fab fa-telegram text-lg"></i
            ></a>
            <a href="#" class="hover:text-gray-800 transition"
              ><i class="fab fa-linkedin-in text-lg"></i
            ></a>
          </div>
        </div>
      </footer>
    </div>

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
  </body>
</html>
