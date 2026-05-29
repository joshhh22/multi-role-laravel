<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="container mt-5">

<h1>Edit Produk</h1>

<form action="{{ route('products.update', $product->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Nama Barang</label>

        <input type="text"
               name="nama_barang"
               value="{{ $product->nama_barang }}"
               class="form-control">

    </div>

    <div class="mb-3">

        <label>Harga</label>

        <input type="number"
               name="harga"
               value="{{ $product->harga }}"
               class="form-control">

    </div>

    <div class="mb-3">

        <label>Stok</label>

        <input type="number"
               name="stok"
               value="{{ $product->stok }}"
               class="form-control">

    </div>

    <div class="mb-3">

        <label>Gambar Baru</label>

        <input type="file"
               name="gambar"
               class="form-control">

    </div>

    <button class="btn btn-warning">
        Update
    </button>

</form>

</body>
</html>