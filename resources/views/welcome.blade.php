<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sekolahku</title>
  @vite('resources/css/app.css')
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <header>
    <nav class="bg-white-200 py-4 px-6">
      <div class="flex items-center justify-between">
        <a href="/" class="text-2xl font-bold text-green-200">Sekolahku</a>
        <div>
          <a href="/login" class="text-blue-500 border border-blue-500 rounded-md px-4 py-2 mr-4">Login</a>
          <a href="/register" class="text-red-500 border border-red-500 rounded-md px-4 py-2">Sign Up</a>
        </div>
      </div>
    </nav>

    <section id="home" class="pt-36">
      <div class="container">
        <div class="flex flex-wrap items-center justify-center">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-primary md:text-xl">
              Halo Semua 👋🏻 , Selamat Datang Di
              <span class="mt-1 block text-4xl font-bold text-dark lg:text-2xl">
                Sekolahku
              </span>
            </h1>
            <h2 class="mb-5 text-lg font-medium text-slate-500 lg:text-2xl">
              ayok <span class="text-dark">Kelola</span>
            </h2>
            <p class="mb-10 font-medium leading-relaxed text-slate-400">
              Data Anda <span class="font-bold text-dark">Sekarang</span>
            </p>

            <a href="/register" class="mb-2 rounded-full bg-white py-3 px-8 text-base font-semibold transition duration-300 ease-in-out hover:bg-opacity-80 hover:shadow-lg text-green-700">
              Mulai Sekarang
            </a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:right-0 lg:mt-9">
              <div class="flex justify-center items-center">
                <img src="https://media.discordapp.net/attachments/965160388138250340/1112723484678823977/photo_2023-03-24_09-18-23.png?width=468&height=468" alt="kanjud" class="mx-auto max-w-full" />
                <span class="absolute bottom-0 left-1/2 -z-10 -translate-x-1/2 md:scale-125">
                  <svg width="400" height="450" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#14B8A6" d="M40.4,21.5C29,43.1,-19.7,41.3,-32.7,18.8C-45.6,-3.6,-22.8,-46.7,1.5,-45.8C25.9,-44.9,51.8,0,40.4,21.5Z" transform="translate(100 100) scale(1.5)" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <footer class="bg-gray-200 py-6">
    <div class="container mx-auto flex justify-center items-center">
      <a href="https://discord.gg/txcPqxQpXd" class="text-gray-600 hover:text-gray-900 mr-4" target="_blank">
        <i class="fab fa-discord text-2xl"></i>
      </a>
      <a href="https://github.com/ca-kraa/Sekolahku" class="text-gray-600 hover:text-gray-900" target="_blank">
        <i class="fab fa-github text-2xl"></i>
      </a>
    </div>
    <div class="text-center mt-2 text-gray-600 text-sm">
      &copy; 2023 Sekolahku. All rights reserved.
    </div>
  </footer>


  <script src="https://cdn.tailwindcss.com/2.2.19/tailwind.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
