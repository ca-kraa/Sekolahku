<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <title>Edit Forum - Forum Sekolah</title>
  @vite('resources/css/app.css')
</head>
<body>
  <header class="bg-gray-100 py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <a href="/siswa/siswa">
            <h1 class="text-2xl font-bold text-gray-800">Forum Sekolah</h1>
        </a>
        <a href="/" class="text-blue-500 hover:text-blue-700">Kembali</a>
    </div>
  </header>
  <div class="container mx-auto my-10">
    <div class="flex items-center mb-5">
        <img src="https://cdn.discordapp.com/attachments/965160388138250340/1106087072630046780/Salinan_dari_Sumber_Logo_4.png"
            alt="Logo Sekolah" class="w-16 h-16 mr-2">
        <h1 class="text-3xl font-bold">Edit Forum</h1>
    </div>
  </div>
  <div class="container mx-auto mt-4">
    <form action="{{ route('forum.update', $forum->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-4">
        <label for="nama" class="block font-bold text-gray-700">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $forum->nama }}" class="border border-gray-400 p-2 w-full" required>
      </div>
      <div class="mb-4">
        <label for="kelas" class="block font-bold text-gray-700">Kelas:</label>
        <select name="kelas" id="kelas" class="border border-gray-400 p-2 w-full" required>
          <option value="X" {{ $forum->kelas === 'X' ? 'selected' : '' }}>X</option>
          <option value="XI" {{ $forum->kelas === 'XI' ? 'selected' : '' }}>XI</option>
          <option value="XII" {{ $forum->kelas === 'XII' ? 'selected' : '' }}>XII</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="jurusan" class="block font-bold text-gray-700">Jurusan:</label>
        <select name="jurusan" id="jurusan" class="border border-gray-400 p-2 w-full" required>
          <option value="TJKT / TKJ" {{ $forum->jurusan === 'TJKT / TKJ' ? 'selected' : '' }}>TJKT / TKJ</option>
          <option value="DKV / MM" {{ $forum->jurusan === 'DKV / MM' ? 'selected' : '' }}>DKV / MM</option>
          <option value="PPLG / RPL" {{ $forum->jurusan === 'PPLG / RPL' ? 'selected' : '' }}>PPLG / RPL</option>
          <option value="Broadcasting / BC" {{ $forum->jurusan === 'Broadcasting / BC' ? 'selected' : '' }}>Broadcasting / BC</option>
        </select>
      </div>

      <div class="mb-4">
        <label for="pesan" class="block font-bold text-gray-700">Pesan:</label>
        <textarea name="pesan" id="pesan" rows="4" class="border border-gray-400 p-2 w-full" required>{{ $forum->pesan }}</textarea>
      </div>
      <div>
        <button type="submit" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">Update</button>
      </div>
    </form>
  </div>
</body>
</html>
