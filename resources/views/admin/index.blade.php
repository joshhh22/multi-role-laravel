<x-app-layout>

<div class="min-h-screen bg-gray-100">

    <div class="max-w-7xl mx-auto px-8 py-10">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-10">

            <div>

                <h1 class="text-5xl font-bold text-gray-800">
                    Daftar Produk
                </h1>

                <p class="text-gray-500 mt-2">
                    Kelola seluruh produk toko Anda
                </p>

            </div>

            <!-- BACK -->
            <a href="{{ route('dashboard') }}"
               class="bg-white hover:bg-gray-50 text-indigo-600 px-6 py-4 rounded-2xl shadow-lg font-semibold transition">

                ← Dashboard

            </a>

        </div>

        <!-- MAIN CARD -->
        <div class="bg-white rounded-3xl shadow-lg p-8">

            <!-- TOP BAR -->
            <div class="flex flex-col md:flex-row justify-between gap-5 mb-10">

                <!-- SEARCH -->
                <form method="GET"
                      action="{{ route('products.index') }}"
                      class="w-full md:w-1/3">

                    <input type="text"
                           name="search"
                           placeholder="Cari produk..."
                           class="w-full bg-gray-100 border-0 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-indigo-400 outline-none">

                </form>

                <!-- BUTTON -->
                <a href="{{ route('products.create') }}"
                   class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl font-bold shadow-lg transition text-center">

                    + Tambah Produk

                </a>

            </div>

            <!-- PRODUCT GRID -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                @foreach($products as $p)

                <div class="bg-gray-50 hover:bg-white rounded-3xl p-6 shadow-md hover:shadow-2xl transition duration-300">

                    <!-- IMAGE -->
                    <div class="mb-5">

                        @if($p->gambar)

                            <img src="{{ asset('storage/' . $p->gambar) }}"
                                 class="w-full h-64 object-cover rounded-3xl">

                        @else

                            <div class="w-full h-64 bg-gray-200 rounded-3xl"></div>

                        @endif

                    </div>

                    <!-- INFO -->
                    <div>

                        <div class="flex justify-between items-start">

                            <div>

                                <h2 class="text-3xl font-bold text-gray-800">
                                    {{ $p->nama_barang }}
                                </h2>

                                <p class="text-indigo-600 text-2xl font-bold mt-3">
                                    Rp{{ number_format($p->harga) }}
                                </p>

                            </div>

                            <!-- STOCK -->
                            @if($p->stok > 50)

                                <span class="bg-green-100 text-green-600 px-4 py-2 rounded-xl font-bold">

                                    {{ $p->stok }} stok

                                </span>

                            @elseif($p->stok > 10)

                                <span class="bg-yellow-100 text-yellow-600 px-4 py-2 rounded-xl font-bold">

                                    {{ $p->stok }} stok

                                </span>

                            @else

                                <span class="bg-red-100 text-red-600 px-4 py-2 rounded-xl font-bold">

                                    {{ $p->stok }} stok

                                </span>

                            @endif

                        </div>

                        <!-- ACTION -->
                        <div class="flex gap-4 mt-8">

                            <!-- EDIT -->
                            <a href="{{ route('products.edit', $p->id) }}"
                               class="flex-1 bg-yellow-400 hover:bg-yellow-500 text-white text-center py-3 rounded-2xl font-bold transition">

                                ✏ Edit

                            </a>

                            <!-- DELETE -->
                            <form action="{{ route('products.destroy', $p->id) }}"
                                  method="POST"
                                  class="flex-1">

                                @csrf
                                @method('DELETE')

                                <button class="w-full bg-red-500 hover:bg-red-600 text-white py-3 rounded-2xl font-bold transition">

                                    🗑 Hapus

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</div>

</x-app-layout>