<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Listar Libros</h1>

<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>ISBN</th>
            <th>Editorial</th>
            <th>Páginas</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($libros as $libro)
        <tr>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->ISBN}}</td>
            <td>{{$libro->editorial}}</td>
            <td>{{$libro->paginas}}</td>
            <td>
                <a href="{{route('libro.show',$libro->id)}}">Detalle</a>
                <form action="{{route('libro.destroy',$libro->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
                <a href="{{route('libro.edit',$libro->id)}}">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
   
</body>
</html>
