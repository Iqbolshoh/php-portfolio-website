<!doctype html>
<html lang="uz">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio · Iqbolshoh | Bosh sahifa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body class="antialiased text-gray-800">
  <div class="min-h-screen flex flex-col">

    <!-- Header -->
    <?php include './components/header.php' ?>

    <!-- Main Content -->
    <main class="flex-grow">
      <!-- Hero Section -->
      <section
        class="relative overflow-hidden bg-gradient-to-br from-white via-indigo-50/40 to-white py-16 md:py-24">
        <div
          class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-10">
          <div class="flex-1 text-center md:text-left">
            <span
              class="inline-block bg-indigo-100 text-indigo-700 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide mb-4">
              Frontend · 4+ yil tajriba
            </span>
            <h1
              class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
              Salom, men <span class="text-indigo-600">Iqbolshoh</span> <br />
              ijodiy dasturchiman
            </h1>
            <p class="mt-5 text-lg text-gray-600 max-w-xl">
              Zamonaviy veb-interfeyslar, toza kod va foydalanuvchi
              tajribasiga e'tibor qarataman. React, Tailwind CSS va Node.js
              bilan ishlayman.
            </p>
            <div
              class="mt-7 flex flex-wrap gap-4 justify-center md:justify-start">
              <a
                href="project.php"
                class="inline-flex items-center bg-gray-900 text-white px-6 py-3 rounded-full font-medium hover:bg-gray-800 transition shadow-md">
                Loyihalarim <i class="fas fa-arrow-right ml-2 text-sm"></i>
              </a>
              <a
                href="mailto:Iqbolshoh@example.com"
                class="inline-flex items-center border border-gray-300 text-gray-800 px-6 py-3 rounded-full font-medium hover:bg-gray-100 transition">
                <i class="far fa-envelope mr-2"></i> Bog'lanish
              </a>
            </div>
          </div>
          <div class="flex-1 flex justify-center md:justify-end">
            <div
              class="relative w-64 h-64 sm:w-72 sm:h-72 bg-gradient-to-tr from-indigo-400 to-purple-500 rounded-full p-1 shadow-2xl">
              <div
                class="w-full h-full bg-white rounded-full flex items-center justify-center text-6xl font-bold text-indigo-600 select-none">
                <i class="fas fa-user-astronaut"></i>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Stats -->
      <section class="py-12 bg-white border-y border-gray-100">
        <div
          class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
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
          class="text-2xl md:text-3xl font-bold text-gray-900 mb-10 text-center">
          Asosiy texnologiyalar
        </h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5">
          <div
            class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center gap-2 hover:shadow-md transition">
            <i class="fab fa-html5 text-3xl text-orange-500"></i>
            <span class="font-medium">HTML5</span>
          </div>
          <div
            class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center gap-2 hover:shadow-md transition">
            <i class="fab fa-css3-alt text-3xl text-blue-500"></i>
            <span class="font-medium">CSS3 / Tailwind</span>
          </div>
          <div
            class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center gap-2 hover:shadow-md transition">
            <i class="fab fa-js-square text-3xl text-yellow-500"></i>
            <span class="font-medium">JavaScript</span>
          </div>
          <div
            class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center gap-2 hover:shadow-md transition">
            <i class="fab fa-react text-3xl text-cyan-500"></i>
            <span class="font-medium">React</span>
          </div>
          <div
            class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center gap-2 hover:shadow-md transition">
            <i class="fab fa-node-js text-3xl text-green-600"></i>
            <span class="font-medium">Node.js</span>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <?php include './components/footer.php' ?>

  </div>
</body>

</html>