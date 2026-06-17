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
  <link rel="stylesheet" href="./assets/style.css">
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

          <?php
          $projects = json_decode(file_get_contents('./data/projects.json'), true);

          foreach ($projects as $p) : ?>
            <div
              class="project-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden flex flex-col">
              <div
                class="h-48 bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center text-white text-5xl">
                <img src="<?= $p['image'] ?>" alt="<?= $p['title'] ?>">

              </div>
              <div class="p-5 flex flex-col flex-grow">
                <h3 class="text-xl font-bold text-gray-900"><?= $p['title'] ?></h3>
                <p class="text-gray-500 text-sm mt-1"><?= $p['description'] ?></p>

                <div class="mt-4 flex flex-wrap gap-2">
                  <?php foreach ($p['tags'] as $tag) : ?>
                    <span
                      class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full"><?= $tag ?></span>
                  <?php endforeach ?>
                </div>

                <div class="mt-auto pt-4 flex items-center justify-between">
                  <a
                    href="<?= $p['link'] ?>"
                    class="text-indigo-600 font-medium text-sm hover:underline flex items-center gap-1"><i class="fas fa-external-link-alt text-xs"></i> Ko'rish</a>
                  <span class="text-gray-400 text-xs"><?= $p['year'] ?></span>
                </div>
              </div>
            </div>
          <?php endforeach ?>


        </div>
      </section>
    </main>

    <!-- Footer -->
    <?php include './components/footer.php' ?>

  </div>
</body>

</html>