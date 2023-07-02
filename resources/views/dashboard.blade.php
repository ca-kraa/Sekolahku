<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center">
                        <div class="mr-4">
                            <img src="https://i.pinimg.com/564x/cc/95/9d/cc959dad60c1641701885dcc0ef27d31.jpg" alt="hehe" class="w-12 h-12 rounded-full">
                        </div>
                        <div>
                            <h1 class="text-2xl font-semibold">{{ __("Selamat datang,") }} {{ Auth::user()->name }}</h1>
                            <p class="text-gray-500">{{ __("Ini adalah halaman dashboard Anda.") }}</p>
                        </div>
                    </div>

                    <div class="mt-8">
                        <ul class="list-disc list-inside">
                            <li>
                                <a href="{{ route('guru.guru') }}" class="text-blue-500 hover:underline">{{ __("Untuk Mengatur Data Guru") }}</a>
                            </li>
                            <li>
                                <a href="{{ route('siswa.siswa') }}" class="text-blue-500 hover:underline">{{ __("Untuk Mengatur Data Siswa") }}</a>
                            </li>
                            <li>
                                <a href="{{ route('forum.home') }}" class="text-blue-500 hover:underline">{{ __("Lihat Apa Saja Yang Ada di Diskusikan Di Forum !") }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
