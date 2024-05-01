<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <link rel="stylesheet" href="{{ asset('asset/css/category-c/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Create New Category</h1>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_kategori">Category Name:</label>
                    <input type="text" id="nama_kategori" name="nama_kategori" required>
                </div>
                <button type="submit">Create Category</button>
            </form>
        </div>
    </div>
</body>

</html>
