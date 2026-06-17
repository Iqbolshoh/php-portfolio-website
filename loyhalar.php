<!doctype html>
<html lang="uz">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio · Iqbolshoh | Loyihalar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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

    .project-card {
      transition:
        transform 0.2s ease,
        box-shadow 0.2s ease;
    }

    .project-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 25px 30px -12px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>

<body class="antialiased text-gray-800">
  <div class="min-h-screen flex flex-col">
    <!-- Header -->
    <?php include './components/header.php' ?>

    <!-- Main Content -->
    <main class="flex-grow">
      <section class="py-16 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
            Loyihalar
          </h2>
          <p class="mt-3 text-gray-500 max-w-xl mx-auto">
            Mening so'nggi ishlarim. Har bir loyiha puxta o'ylangan va
            zamonaviy texnologiyalar asosida yaratilgan.
          </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Project 1 -->
          <div
            class="project-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden flex flex-col">
            <div
              class="h-48 bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center text-white text-5xl">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="p-5 flex flex-col flex-grow">
              <h3 class="text-xl font-bold text-gray-900">Online Do'kon</h3>
              <p class="text-gray-500 text-sm mt-1">
                React, Node.js, Stripe to'lov tizimi bilan to'liq e-commerce
                platforma.
              </p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">React</span>
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Tailwind</span>
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">MongoDB</span>
              </div>
              <div class="mt-auto pt-4 flex items-center justify-between">
                <a
                  href="#"
                  class="text-indigo-600 font-medium text-sm hover:underline flex items-center gap-1"><i class="fas fa-external-link-alt text-xs"></i> Ko'rish</a>
                <span class="text-gray-400 text-xs">2026</span>
              </div>
            </div>
          </div>

          <!-- Project 2 -->
          <div
            class="project-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden flex flex-col">
            <div
              class="h-48 bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center text-white text-5xl">
              <i class="fas fa-tasks"></i>
            </div>
            <div class="p-5 flex flex-col flex-grow">
              <h3 class="text-xl font-bold text-gray-900">
                TaskFlow boshqaruv
              </h3>
              <p class="text-gray-500 text-sm mt-1">
                Kanban uslubidagi loyiha boshqarish vositasi, real vaqt
                yangilanishi.
              </p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Next.js</span>
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Tailwind</span>
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Firebase</span>
              </div>
              <div class="mt-auto pt-4 flex items-center justify-between">
                <a
                  href="#"
                  class="text-indigo-600 font-medium text-sm hover:underline flex items-center gap-1"><i class="fas fa-external-link-alt text-xs"></i> Ko'rish</a>
                <span class="text-gray-400 text-xs">2026</span>
              </div>
            </div>
          </div>

          <!-- Project 3 -->
          <div
            class="project-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden flex flex-col">
            <div
              class="h-48 bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center text-white text-5xl">
              <i class="fas fa-newspaper"></i>
            </div>
            <div class="p-5 flex flex-col flex-grow">
              <h3 class="text-xl font-bold text-gray-900">
                Blog platformasi
              </h3>
              <p class="text-gray-500 text-sm mt-1">
                MDX qo'llab-quvvatlaydigan statik blog, SEO
                optimallashtirilgan.
              </p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Gatsby</span>
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Tailwind</span>
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">GraphQL</span>
              </div>
              <div class="mt-auto pt-4 flex items-center justify-between">
                <a
                  href="#"
                  class="text-indigo-600 font-medium text-sm hover:underline flex items-center gap-1"><i class="fas fa-external-link-alt text-xs"></i> Ko'rish</a>
                <span class="text-gray-400 text-xs">2024</span>
              </div>
            </div>
          </div>

          <!-- Project 4 -->
          <div
            class="project-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden flex flex-col">
            <div
              class="h-48 bg-gradient-to-br from-rose-400 to-pink-500 flex items-center justify-center text-white text-5xl">
              <i class="fas fa-chart-line"></i>
            </div>
            <div class="p-5 flex flex-col flex-grow">
              <h3 class="text-xl font-bold text-gray-900">
                Analitika paneli
              </h3>
              <p class="text-gray-500 text-sm mt-1">
                Interaktiv diagrammalar va hisobotlar bilan ma'lumotlar
                vizualizatsiyasi.
              </p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Vue</span>
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">D3.js</span>
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Tailwind</span>
              </div>
              <div class="mt-auto pt-4 flex items-center justify-between">
                <a
                  href="#"
                  class="text-indigo-600 font-medium text-sm hover:underline flex items-center gap-1"><i class="fas fa-external-link-alt text-xs"></i> Ko'rish</a>
                <span class="text-gray-400 text-xs">2024</span>
              </div>
            </div>
          </div>

          <!-- Project 5 -->
          <div
            class="project-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden flex flex-col">
            <div
              class="h-48 bg-gradient-to-br from-sky-400 to-blue-600 flex items-center justify-center text-white text-5xl">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="p-5 flex flex-col flex-grow">
              <h3 class="text-xl font-bold text-gray-900">
                FitTrack mobil ilova
              </h3>
              <p class="text-gray-500 text-sm mt-1">
                React Native bilan yaratilgan sog'liqni saqlash trekeri.
              </p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">React Native</span>
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Tailwind</span>
              </div>
              <div class="mt-auto pt-4 flex items-center justify-between">
                <a
                  href="#"
                  class="text-indigo-600 font-medium text-sm hover:underline flex items-center gap-1"><i class="fas fa-external-link-alt text-xs"></i> Ko'rish</a>
                <span class="text-gray-400 text-xs">2023</span>
              </div>
            </div>
          </div>

          <!-- Project 6 -->
          <div
            class="project-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden flex flex-col">
            <div
              class="h-48 bg-gradient-to-br from-violet-400 to-purple-700 flex items-center justify-center text-white text-5xl">
              <i class="fas fa-cloud-sun"></i>
            </div>
            <div class="p-5 flex flex-col flex-grow">
              <h3 class="text-xl font-bold text-gray-900">Ob-havo ilovasi</h3>
              <p class="text-gray-500 text-sm mt-1">
                OpenWeather API asosida real vaqt ob-havo ma'lumotlari.
              </p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">JavaScript</span>
                <span
                  class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">Tailwind</span>
              </div>
              <div class="mt-auto pt-4 flex items-center justify-between">
                <a
                  href="#"
                  class="text-indigo-600 font-medium text-sm hover:underline flex items-center gap-1"><i class="fas fa-external-link-alt text-xs"></i> Ko'rish</a>
                <span class="text-gray-400 text-xs">2023</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <?php include './components/footer.php' ?>

  </div>
</body>

</html>