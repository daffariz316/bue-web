<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="{{ asset('asset/css/edit/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Edit Produk</h1>
            <form action="{{ route('products.update', ['id' => $product->id]) }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Formulir edit -->
                <div class="form-group">
                    <label for="name_product">Nama Produk:</label>
                    <input type="text" id="name_product" name="name_product" value="{{ $product->name_product }}">
                </div>

                <div class="form-group">
                    <label for="price">Harga:</label>
                    <input type="text" id="price" name="price" value="{{ $product->price }}">
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi:</label>
                    <textarea id="description" name="description">{{ $product->description }}</textarea>
                    <p class="text-muted">Total kalimat: {{ str_word_count($product->description) }}</p>
                </div>


                <div class="form-group">
                    <label for="image">Gambar:</label>
                    <input type="file" id="image" name="image" value="{{ $product->image }}">
                </div>

                <div class="form-group">
                    <label for="stock">Stok:</label>
                    <input type="number" id="stock" name="stock" value="{{ $product->stock }}">
                </div>

                <div class="form-group">
                    <label for="date">Tanggal:</label>
                    <input type="date" id="date" name="date" value="{{ $product->date }}">
                </div>

                <!-- tambahkan formulir lainnya sesuai kebutuhan -->

                <button type="submit">Simpan Perubahan</button>
            </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <!-- Formulir untuk tombol hapus -->
            <form action="{{ route('products.delete', ['id' => $product->id]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Hapus</button>
            </form>
        </div>
    </div>
</body>
</html>
