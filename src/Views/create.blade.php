<!DOCTYPE html>
<html>
<head>
    <title>Create Item</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        form { max-width: 500px; }
        input, textarea { width: 100%; padding: 8px; margin: 10px 0; }
        button { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h1>Create New Item</h1>

    <form action="{{ route('crud.store') }}" method="POST">
        @csrf

        <label>Item Name</label>
        <input type="text" name="name" required>

        <label>Description</label>
        <textarea name="description" rows="4"></textarea>

        <button type="submit">Create</button>
        <a href="{{ route('crud.index') }}">Back</a>
    </form>
</body>
</html>
