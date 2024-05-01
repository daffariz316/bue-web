<!DOCTYPE html>
<html>
<head>
    <title>Edit Biaya</title>
    <link rel="stylesheet" href="{{ asset('asset/css/edit/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Edit Biaya</h1>
            <form action="{{ route('biaya.update', ['id' => $biaya->id]) }}" method="post">
                @csrf
                @method('PUT')
                <!-- Formulir edit -->
                <div class="form-group">
                    <label for="name_product">Nama Produk:</label>
                    <input type="text" id="name_product" name="name_product" value="{{ $biaya->name_product }}">
                </div>
                <div class="form-group">
                    <label for="type">type:</label>
                    <select name="type" id="type">
                        <option value="income" {{ $biaya->type == 'income' ? 'selected' : '' }}>Income</option>
                        <option value="expense" {{ $biaya->type == 'expense' ? 'selected' : '' }}>Expense</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount">Harga:</label>
                    <input type="text" id="amount" name="amount" value="{{ $biaya->amount }}">
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi:</label>
                    <textarea id="description" name="description">{{ $biaya->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="start_date">Tanggal mulai:</label>
                    <input type="date" id="start_date" name="start_date" value="{{ $biaya->start_date }}">
                </div>

                <div class="form-group">
                    <label for="end_date">Tanggal selesai:</label>
                    <input type="date" id="end_date" name="end_date" value="{{ $biaya->end_date }}">
                </div>
                <!-- tambahkan formulir lainnya sesuai kebutuhan -->

                <button type="submit">Simpan Perubahan</button>
            </form>

            <!-- Formulir untuk tombol hapus -->
            <form action="{{ route('biaya.delete', ['id' => $biaya->id]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Hapus</button>
            </form>
        </div>
    </div>
</body>
</html>
