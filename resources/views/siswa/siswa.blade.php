<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Dashboard | Data Siswa</title>
</head>

<body class="flex flex-col h-screen">
    <header class="bg-gray-100 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="/siswa/siswa">
                <h1 class="text-2xl font-bold text-gray-800">Data Siswa</h1>
            </a>
            <a href="/dashboard" class="text-blue-500 hover:text-blue-700">Kembali</a>
        </div>
    </header>
    <div class="container mx-auto my-10">
        <div class="flex items-center mb-5">
            <img src="https://cdn.discordapp.com/attachments/965160388138250340/1106087072630046780/Salinan_dari_Sumber_Logo_4.png"
                alt="Logo Sekolah" class="w-16 h-16 mr-2">
            <h1 class="text-3xl font-bold">Data Siswa</h1>
            <div class="ml-auto flex">
                <form action="{{ route('siswa.siswa') }}" method="GET" class="flex">
                    <input type="text" name="keyword" class="py-2 px-4 border border-gray-300 rounded-l-md" placeholder="Cari siswa...">
                    <button type="submit" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-r-md">
                        Cari
                    </button>
                </form>
            </div>
            <button class="ml-4 py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">
                <a href="/siswa/create">
                    Tambahkan Data Siswa
                </a>
            </button>
        </div>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 ">#</th>
                    <th class="px-4 py-2">NISN</th>
                    <th class="px-4 py-2">Nama Lengkap</th>
                    <th class="px-4 py-2">Jenis Kelamin</th>
                    <th class="px-4 py-2">Tanggal Lahir</th>
                    <th class="px-4 py-2">Alamat</th>
                    <th class="px-4 py-2">No Hp</th>
                    <th class="px-4 py-2">Pilihan</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($siswa as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{ $no++ }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->nisn }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->nama }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->jenisKelamin }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->tanggalLahir }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->alamat }}</td>
                        <td class="border px-4 py-2 text-center">{{ $item->no_hp }}</td>
                        <td class="border px-4 py-2 text-center">
                            <div class="flex ml-4">
                                <a href="{{ route('siswa.edit', $item->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    {{ $siswa->links() }}
</body>

</html>
