<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Libro</h1>

    <form action="{{route('libro.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
            Titulo
            <br>
            <input type="text" name="titulo">
        </label>
        <br>
        <label>
           ISBN
            <br>
            <input type="text" name="ISBN">
        </label>
       
        <br>
        <label>
          Editorial
            <br>
            <input type="text" name="editorial">
        </label>

        <br>
        <label>
          Paginas
            <br>
            <input type="text" name="paginas">
        </label>
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
       




</body>
</html>