<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        form { max-width: 500px; }
        input, textarea { width: 100%; padding: 8px; margin: 10px 0; }
        button { padding: 10px 20px; background-color: #2196F3; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0b7dda; }
    </style>
</head>
<body>
    <h1>Edit Item #{{ $id }}</h1>

    <form action="{{ route('crud.update', $id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Item Name</label>
        <input type="text" name="name" value="Sample Item">

        <label>Description</label>
        <textarea name="description" rows="4">Sample Description</textarea>

        <button type="submit">Update</button>
        <a href="{{ route('crud.index') }}">Back</a>
    </form>
</body>
</html>
