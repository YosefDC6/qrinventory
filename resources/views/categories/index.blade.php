<!DOCTYPE html>
<html>
<head>
    <title>Categorías</title>
</head>
<body>
    <h1>Listado de Categorías</h1>
    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
</body>
</html>

