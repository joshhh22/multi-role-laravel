<x-app-layout>

    <div class="min-h-screen bg-gray-100">

        <div class="max-w-7xl mx-auto px-8 py-10">

            <!-- HEADER -->
            <div class="flex justify-between items-center mb-10">

                <div>

                    <h1 class="text-5xl font-bold text-gray-800">
                        Dashboard
                    </h1>

                    <p class="text-gray-500 mt-2">
                        Selamat datang kembali,
                        {{ Auth::user()->name }}
                    </p>

                </div>

                <div class="bg-white shadow-lg rounded-2xl px-6 py-4">

                    <p class="text-sm text-gray-400">
                        Login sebagai
                    </p>

                    <p class="font-bold text-indigo-600 text-lg">
                        {{ Auth::user()->role }}
                    </p>

                </div>

            </div>

            <!-- CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- PRODUK -->
                <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-2xl transition">

                    <div class="flex justify-between items-center">

                        <div>

                            <h2 class="text-3xl font-bold text-gray-800">
                                Produk
                            </h2>

                            <p class="text-gray-500 mt-2">
                                Lihat dan kelola daftar produk
                            </p>

                        </div>

                        <div class="bg-indigo-100 p-5 rounded-2xl">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-10 w-10 text-indigo-600"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M20 13V7a2 2 0 00-2-2h-3V3H9v2H6a2 2 0 00-2 2v6m16 0v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6m16 0H4"/>

                            </svg>

                        </div>

                    </div>

                    <div class="mt-8">

                        <a href="{{ route('products.index') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-2xl font-semibold transition shadow">

                            Lihat Daftar Produk

                        </a>

                    </div>

                </div>

                <!-- ADMIN CARD -->
                @if(Auth::user()->role == 'admin')

                <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-2xl transition">

                    <div class="flex justify-between items-center">

                        <div>

                            <h2 class="text-3xl font-bold text-gray-800">
                                Tambah Barang
                            </h2>

                            <p class="text-gray-500 mt-2">
                                Tambahkan produk baru ke toko
                            </p>

                        </div>

                        <div class="bg-green-100 p-5 rounded-2xl">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-10 w-10 text-green-600"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 4v16m8-8H4"/>

                            </svg>

                        </div>

                    </div>

                    <div class="mt-8">

                        <a href="{{ route('products.create') }}"
                           class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-2xl font-semibold transition shadow">

                            + Tambah Barang

                        </a>

                    </div>

                </div>

                @endif

            </div>

            <!-- INFO -->
            <div class="bg-white rounded-3xl shadow-lg p-8 mt-10">

                <h2 class="text-2xl font-bold text-gray-800 mb-3">
                    Informasi Akun
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="bg-gray-100 rounded-2xl p-5">

                        <p class="text-gray-400 text-sm">
                            Nama
                        </p>

                        <p class="font-bold text-lg text-gray-800 mt-1">
                            {{ Auth::user()->name }}
                        </p>

                    </div>

                    <div class="bg-gray-100 rounded-2xl p-5">

                        <p class="text-gray-400 text-sm">
                            Email
                        </p>

                        <p class="font-bold text-lg text-gray-800 mt-1">
                            {{ Auth::user()->email }}
                        </p>

                    </div>

                    <div class="bg-gray-100 rounded-2xl p-5">

                        <p class="text-gray-400 text-sm">
                            Role
                        </p>

                        <p class="font-bold text-lg text-indigo-600 mt-1 uppercase">
                            {{ Auth::user()->role }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>