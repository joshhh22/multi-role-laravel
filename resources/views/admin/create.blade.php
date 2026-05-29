<x-app-layout>

<div class="min-h-screen bg-gray-100">

    <div class="max-w-5xl mx-auto px-8 py-10">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-10">

            <div>

                <h1 class="text-5xl font-bold text-gray-800">
                    Tambah Produk
                </h1>

                <p class="text-gray-500 mt-2">
                    Tambahkan produk baru ke toko Anda
                </p>

            </div>

            <!-- BACK -->
            <a href="{{ route('dashboard') }}"
               class="bg-white hover:bg-gray-50 text-indigo-600 px-6 py-4 rounded-2xl shadow-lg font-semibold transition">

                ← Kembali

            </a>

        </div>

        <!-- CARD -->
        <div class="bg-white rounded-3xl shadow-xl p-10">

            <form action="{{ route('products.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <!-- NAMA -->
                <div class="mb-8">

                    <label class="block text-gray-700 font-bold text-lg mb-3">
                        Nama Produk
                    </label>

                    <input type="text"
                           name="nama_barang"
                           placeholder="Masukkan nama produk..."
                           class="w-full bg-gray-100 border-0 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-indigo-400 outline-none text-lg">

                </div>

                <!-- HARGA -->
                <div class="mb-8">

                    <label class="block text-gray-700 font-bold text-lg mb-3">
                        Harga Produk
                    </label>

                    <input type="number"
                           name="harga"
                           placeholder="Contoh: 5000"
                           class="w-full bg-gray-100 border-0 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-indigo-400 outline-none text-lg">

                </div>

                <!-- STOK -->
                <div class="mb-8">

                    <label class="block text-gray-700 font-bold text-lg mb-3">
                        Jumlah Stok
                    </label>

                    <input type="number"
                           name="stok"
                           placeholder="Masukkan jumlah stok..."
                           class="w-full bg-gray-100 border-0 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-indigo-400 outline-none text-lg">

                </div>

                <!-- GAMBAR -->
                <div class="mb-10">

                    <label class="block text-gray-700 font-bold text-lg mb-3">
                        Upload Gambar
                    </label>

                    <div class="border-2 border-dashed border-gray-300 rounded-3xl p-10 bg-gray-50 hover:border-indigo-400 transition">

                        <input type="file"
                               name="gambar"
                               class="w-full text-lg text-gray-600">

                        <p class="text-gray-400 mt-4">
                            Format: JPG, JPEG, PNG
                        </p>

                    </div>

                </div>

                <!-- BUTTON -->
                <div class="flex gap-5">

                    <button type="submit"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-10 py-4 rounded-2xl font-bold text-lg shadow-lg transition">

                        + Simpan Produk

                    </button>

                    <a href="{{ route('products.index') }}"
                       class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-10 py-4 rounded-2xl font-bold text-lg transition">

                        Batal

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</x-app-layout>