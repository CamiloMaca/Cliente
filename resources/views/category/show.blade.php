<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <br><br>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de la categoria</th>
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td>{{ $category['id'] }}</td> 
                <td>{{ $category['category_name'] }}</td>
            </tr>

        </tbody>
    </table>
</body>
</html>