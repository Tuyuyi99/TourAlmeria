<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    @foreach ($CategoriesList as $category)
        <h1>Categoria: {{ $category->name }}</h1>
    @endforeach
</body>
</html>