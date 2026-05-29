<!DOCTYPE html>
<html>
<head>
    <title>Katalog Produk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="container mt-5">

<h1>Katalog Produk</h1>

<form method="GET"
      action="{{ route('products.index') }}"
      class="mb-3">

    <input type="text"
           name="search"
           placeholder="Cari produk..."
           class="form-control">

</form>

<div class="row">

@foreach($products as $p)

<div class="col-md-4 mb-4">

    <div class="card">

        @if($p->gambar)

        <img src="{{ asset('storage/' . $p->gambar) }}"
             class="card-img-top"
             height="250"
             style="object-fit:cover;">

        @endif

        <div class="card-body">

            <h5>{{ $p->nama_barang }}</h5>

            <p>Harga: Rp{{ number_format($p->harga) }}</p>

            <p>Stok: {{ $p->stok }}</p>

        </div>

    </div>

</div>

@endforeach

</div>

</body>
</html>