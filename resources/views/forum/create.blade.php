<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <title>Forum Sekolah</title>
</head>
<body class="flex flex-col h-screen">
    <div class="container mx-auto mt-8">
      <div class="max-w-md mx-auto bg-white p-8 border border-gray-300">
        <h2 class="text-xl mb-6">Input Forum</h2>
        <form action="{{ route('forum.store') }}" method="POST">
          @csrf
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500" required>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="kelas">Kelas</label>
            <select id="kelas" name="kelas" class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500" required>
              <option value="" disabled selected>Pilih kelas</option>
              <option value="X">X</option>
              <option value="XI">XI</option>
              <option value="XII">XII</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="jurusan">Jurusan</label>
            <select id="jurusan" name="jurusan" class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500" required>
              <option value="" disabled selected>Pilih Jurusan</option>
              <option value="TJKT / TKJ">TJKT / TKJ</option>
              <option value="DKV / MM">DKV / MM</option>
              <option value="PPLG / RPL">PPLG / RPL</option>
              <option value="Broadcasting / BC">Broadcasting / BC</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500" required></textarea>
          </div>
          <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Kirim</button>
          </div>
        </form>
      </div>

</body>
</html>
