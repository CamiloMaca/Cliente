<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear nueva categoria</title>
</head>
<body>
    <h1>
        Crea una nueva categoria
    </h1>

    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <label>Nombre la nueva categoria</label>
            <input type="text" name="category_name">
        <button type="submit">Nueva categoria</button>
    </form>
</body>
</html>