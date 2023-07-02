<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/2 bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Edit Data Siswa</h1>
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nisn" class="block mb-2 font-bold text-gray-800">NISN</label>
                    <input type="text" id="nisn" name="nisn"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500"
                        value="{{ $siswa->nisn }}">
                </div>
                <div class="mb-4">
                    <label for="nama" class="block mb-2 font-bold text-gray-800">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500"
                        value="{{ $siswa->nama }}">
                </div>
                <div class="mb-4">
                    <label for="jenisKelamin" class="block mb-2 font-bold text-gray-800">Jenis Kelamin</label>
                    <select id="jenisKelamin" name="jenisKelamin"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500">
                        <option value="Laki-laki" {{ $siswa->jenisKelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $siswa->jenisKelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="tanggalLahir" class="block mb-2 font-bold text-gray-800">Tanggal Lahir</label>
                    <input type="date" id="tanggalLahir" name="tanggalLahir"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500"
                        value="{{ $siswa->tanggalLahir }}">
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block mb-2 font-bold text-gray-800">Alamat</label>
                    <textarea id="alamat" name="alamat"
                        class="w-full h-20 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500">{{ $siswa->alamat }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="no_Hp" class="block mb-2 font-bold text-gray-800">No. HP</label>
                    <input type="text" id="no_Hp" name="no_Hp"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500"
                        value="{{ $siswa->no_hp }}">
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:bg-blue-700 focus:outline-none">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
