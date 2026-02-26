<!DOCTYPE html>
<html>
<head>
    <title>CRUD - List Items</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        .btn { padding: 5px 10px; margin: 5px; text-decoration: none; border-radius: 3px; }
        .btn-create { background-color: #4CAF50; color: white; }
        .btn-edit { background-color: #2196F3; color: white; }
        .btn-delete { background-color: #f44336; color: white; }
    </style>
</head>
<body>
    <h1>CRUD Package - List Items</h1>

    <a href="{{ route('crud.create') }}" class="btn btn-create">+ Create New Item</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sample Item</td>
                <td>
                    <a href="{{ route('crud.edit', 1) }}" class="btn btn-edit">Edit</a>
                    <a href="#" class="btn btn-delete" onclick="alert('Delete');">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
