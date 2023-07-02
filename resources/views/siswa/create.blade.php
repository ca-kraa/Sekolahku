<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Data Siswa</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/3">
            <h2 class="text-2xl font-bold mb-4">Tambahkan Data Siswa</h2>
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('siswa.store') }}"
                method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nisn" class="block text-gray-700 text-sm font-bold mb-2">NISN</label>
                    <input type="text" id="nisn" name="nisn"
                        class="w-full px-3 py-2 border rounded leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="w-full px-3 py-2 border rounded leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="jenisKelamin" class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin</label>
                    <select id="jenisKelamin" name="jenisKelamin"
                        class="w-full px-3 py-2 border rounded leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="tanggalLahir" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Lahir</label>
                    <input type="date" id="tanggalLahir" name="tanggalLahir"
                        class="w-full px-3 py-2 border rounded leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat</label>
                    <textarea id="alamat" name="alamat"
                        class="w-full px-3 py-2 border rounded leading-tight focus:outline-none focus:shadow-outline"
                        required></textarea>
                </div>
                <div class="mb-4">
                    <label for="no_Hp" class="block text-gray-700 text-sm font-bold mb-2">No HP</label>
                    <input type="text" id="no_Hp" name="no_Hp"
                    class="w-full px-3 py-2 border rounded leading-tight focus:outline-none focus:shadow-outline"
                    required>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
                    <a href="{{ route('siswa.siswa') }}"
                        class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
