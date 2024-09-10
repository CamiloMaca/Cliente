<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX</title>
</head>
<body>

    <table>
        <a href="{{route('categories.create')}}"><button>crear categoria</button></a>
        <tr>
            <th>ID</th>
            <th>Nombre de la categoria</th>
        </tr>
    </table>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category['id']}}</td>
                <td>{{$category['category_name']}}</td>
                <td><a href="{{ route('categories.show', $category['id']) }}"><button>Ver más</button></a></td>
                <td>
                <form action="{{route('categories.destroy',$category['id'])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                    <td><a href="{{route('categories.edit',$category['id'])}}">Editar</a></td>
                </form>   
                </td>
            </tr>
        @endforeach
    </tbody>
</body>
</html>