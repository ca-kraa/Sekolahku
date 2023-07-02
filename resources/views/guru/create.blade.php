<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Form Guru</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/2 bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Tambahkan Data Guru</h1>
            <form action="{{ route('guru.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="kode_guru" class="block mb-2 font-bold text-gray-800">Kode Guru</label>
                    <input type="text" id="kode_guru" name="kode_guru"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block mb-2 font-bold text-gray-800">Nama</label>
                    <input type="tel" id="nama" name="nama"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="mataPelajaran" class="block mb-2 font-bold text-gray-800">Mata Pelajaran</label>
                    <select id="mataPelajaran" name="mataPelajaran"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500"
                        required>
                        <option value="" disabled selected>Pilih Mata Pelajaran</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Matematika">Matematika</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Seni Budaya">Seni Budaya</option>
                        <option value="Pendidikan Agama">Pendidikan Agama</option>
                        <option value="Penjaskes">Penjaskes</option>
                        <option value="Kewarganegaraan">Kewarganegaraan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="nomorTelpon" class="block mb-2 font-bold text-gray-800">Nomor Telpon</label>
                    <input type="tel" id="nomorTelpon" name="nomorTelpon"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block mb-2 font-bold text-gray-800">Alamat:</label>
                    <textarea id="alamat" name="alamat"
                        class="w-full h-20 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500" required></textarea>
                </div>
                <div class="flex justify-between">
                    <a href="{{ route('guru.guru') }}"
                        class="px-4 py-2 text-white bg-gray-500 rounded-lg hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">Kembali</a>
                    <button type="submit"
                        class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:bg-blue-700 focus:outline-none">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
