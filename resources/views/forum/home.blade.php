<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <title>Forum Sekolah</title>
  @vite('resources/css/app.css')
  <style>
    .table-message {
      max-width: 400px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    .read-more-content {
      display: none;
    }
    .read-more-toggle {
      cursor: pointer;
      color: blue;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header class="bg-gray-100 py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <a href="/forum/home">
            <h1 class="text-2xl font-bold text-gray-800">Forum Sekolah</h1>
        </a>
        <a href="/dashboard" class="text-blue-500 hover:text-blue-700">Kembali</a>
    </div>
  </header>
  <div class="container mx-auto my-10">
    <div class="flex items-center justify-between mb-5">
        <img src="https://cdn.discordapp.com/attachments/965160388138250340/1106087072630046780/Salinan_dari_Sumber_Logo_4.png"
            alt="Logo Sekolah" class="w-16 h-16 mr-2">
        <h1 class="text-3xl font-bold">Forum</h1>
        <div class="flex">
            <a href="{{ route('forum.create') }}" class="ml-4 py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">
                Tambahkan Forum
            </a>
        </div>
    </div>
  </div>
  <div class="container mx-auto mt-4">
    <table class="min-w-full bg-white">
      <thead>
        <tr>
          <th class="px-4 py-2">#</th>
          <th class="py-2 px-4 border-b">Nama</th>
          <th class="py-2 px-4 border-b">Kelas</th>
          <th class="py-2 px-4 border-b">Jurusan</th>
          <th class="py-2 px-4 border-b">Pesan</th>
          <th class="py-2 px-4 border-b">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $no = 1;
        @endphp
        @foreach($forums as $item)
          <tr>
            <td class="py-2 px-4 border-b text-center">{{ $no++ }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $item->nama }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $item->kelas }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $item->jurusan }}</td>
            <td class="py-2 px-4 border-b text-center table-message" style="white-space: normal;">
              @if(strlen($item->pesan) > 100)
                  <div>
                      <span class="read-more-content" style="display: none;">{{ $item->pesan }}</span>
                      <span class="read-more-toggle">Baca Selengkapnya</span>
                  </div>
              @else
                  {{ $item->pesan }}
              @endif
          </td>

            <td class="py-2 px-4 border-b text-center">
                <div class="flex">
                    <a href="{{ route('forum.edit', $item->id) }}" class=" text-center mr-2 py-2 px-4 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg">
                        Edit
                    </a>
                    <form action="{{ route('forum.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" text-center py-2 px-4 bg-red-500 hover:bg-red-600 text-white rounded-lg">
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
  <script>
    var readMoreToggle = document.getElementsByClassName('read-more-toggle');
    for (var i = 0; i < readMoreToggle.length; i++) {
      readMoreToggle[i].addEventListener('click', function() {
        var content = this.previousElementSibling;
        if (content.style.display === 'none') {
          content.style.display = 'inline';
          this.innerText = 'Tutup';
        } else {
          content.style.display = 'none';
          this.innerText = 'Baca Selengkapnya';
        }
      });
    }
</script>
{{ $forums->links('pagination::tailwind') }}


</body>
</html>
