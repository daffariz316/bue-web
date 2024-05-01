<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="{{ asset('asset/css/category-c/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Edit Category</h1>
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_kategori">Category Name:</label>
                    <input type="text" id="nama_kategori" name="nama_kategori" value="{{ $category->nama_kategori }}" required>
                </div>
                <button type="submit">Update Category</button>
            </form>
        </div>
    </div>
</body>

</html>
