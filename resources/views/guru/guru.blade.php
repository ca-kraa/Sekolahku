<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Dashboard | Data Guru</title>
</head>

<body class="flex flex-col h-screen">
    <header class="bg-gray-100 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="/guru">
                <h1 class="text-2xl font-bold text-gray-800">Data Guru</h1>
            </a>
            <a href="/dashboard" class="text-blue-500 hover:text-blue-700">Kembali</a>
        </div>
    </header>
    <div class="container mx-auto my-10">
        <div class="flex items-center mb-5">
            <img src="https://cdn.discordapp.com/attachments/965160388138250340/1106087072630046780/Salinan_dari_Sumber_Logo_4.png"
                alt="Logo Sekolah" class="w-16 h-16 mr-2">
            <h1 class="text-3xl font-bold">Data Guru</h1>
            <div class="ml-auto flex items-center">
                <form action="{{ route('guru.search') }}" method="GET" class="flex items-center">
                    <input type="text" name="search" class="px-4 py-2 border border-gray-400 rounded-lg mr-2"
                        placeholder="Cari guru...">
                    <button type="submit" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">
                        Cari
                    </button>
                </form>
                <button class="ml-4 py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">
                    <a href="{{ route('guru.create') }}">
                        Tambahkan Data Guru
                    </a>
                </button>
            </div>
        </div>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Kode Guru</th>
                    <th class="px-4 py-2">Nama Lengkap</th>
                    <th class="px-4 py-2">Mata Pelajaran</th>
                    <th class="px-4 py-2">No Telpon</th>
                    <th class="px-4 py-2">Alamat</th>
                    <th class="px-4 py-2">Pilihan</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($guru as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{ $no++ }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->kode_guru }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->nama }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->mataPelajaran }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->nomorTelpon }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->alamat }}</td>
                        <td class="border px-4 py-2 text-center">
                            <div class="flex justify-center">
                                <button class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">
                                    <a href="{{ route('guru.edit', $item->id) }}">Edit</a>
                                </button>
                                <form action="{{ route('guru.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="py-2 px-4 bg-red-500 hover:bg-red-600 text-white rounded-lg ml-2" >
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $guru->links() }}
</body>

</html>
