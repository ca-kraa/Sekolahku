<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Guru</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto mt-10">
        <div class="bg-white rounded-lg shadow-lg p-5">
            <h1 class="text-center text-2xl font-bold mb-5">Edit Data Guru</h1>
            <form method="POST" action="{{ route('guru.update', $guru->id) }}" class="mx-4 my-4">
                @csrf
                    <div>
                        <label class="block mb-2 font-bold text-gray-700" for="kode_guru">Kode Guru</label>
                        <input class="w-full border border-gray-400 p-2 rounded-lg" type="text" name="kode_guru"
                            id="kode_guru" value="{{ $guru->kode_guru }}" required>
                    </div>
                    <div>
                        <label class="block mb-2 font-bold text-gray-700" for="nama">Nama</label>
                        <input class="w-full border border-gray-400 p-2 rounded-lg" type="text" name="nama"
                            id="nama" value="{{ $guru->nama }}" required>
                    </div>
                    <div>
                        <label class="block mb-2 font-bold text-gray-700" for="mataPelajaran">Mata Pelajaran</label>
                        <select class="w-full border border-gray-400 p-2 rounded-lg" name="mataPelajaran" id="mataPelajaran" required>
                            <option value="" disabled selected>Pilih Mata Pelajaran</option>
                            <option value="Bahasa Indonesia" {{ $guru->mataPelajaran == 'Bahasa Indonesia' ? 'selected' : '' }}>Bahasa Indonesia</option>
                            <option value="Matematika" {{ $guru->mataPelajaran == 'Matematika' ? 'selected' : '' }}>Matematika</option>
                            <option value="IPA" {{ $guru->mataPelajaran == 'IPA' ? 'selected' : '' }}>IPA</option>
                            <option value="IPS" {{ $guru->mataPelajaran == 'IPS' ? 'selected' : '' }}>IPS</option>
                            <option value="Bahasa Inggris" {{ $guru->mataPelajaran == 'Bahasa Inggris' ? 'selected' : '' }}>Bahasa Inggris</option>
                            <option value="Seni Budaya" {{ $guru->mataPelajaran == 'Seni Budaya' ? 'selected' : '' }}>Seni Budaya</option>
                            <option value="Pendidikan Agama" {{ $guru->mataPelajaran == 'Pendidikan Agama' ? 'selected' : '' }}>Pendidikan Agama</option>
                            <option value="Penjaskes" {{ $guru->mataPelajaran == 'Penjaskes' ? 'selected' : '' }}>Penjaskes</option>
                            <option value="Kewarganegaraan" {{ $guru->mataPelajaran == 'Kewarganegaraan' ? 'selected' : '' }}>Kewarganegaraan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 font-bold text-gray-700" for="nomorTelpon">No Telpon</label>
                        <input class="w-full border border-gray-400 p-2 rounded-lg" type="text" name="nomorTelpon"
                            id="nomorTelpon" value="{{ $guru->nomorTelpon }}" required>
                    </div>
                    <div>
                        <label class="block mb-2 font-bold text-gray-700" for="alamat">Alamat</label>
                        <textarea class="w-full border border-gray-400 p-2 rounded-lg" name="alamat" id="alamat" required>{{ $guru->alamat }}</textarea>
                    </div>
                </div>
                <button type="submit"
                    class="mt-5 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Simpan
                    Perubahan</button>
            </form>
        </div>
    </div>
</body>

</html>
