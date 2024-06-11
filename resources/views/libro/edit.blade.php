<h1>Actualizar Libro</h1>
<form action="{{route('libro.update', $libro)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    Titulo
    <br>
    <input name="titulo" type="text" value="{{old('titulo',$libro->lugar) }}">
    <br>
    </label>
   
    <label>
    ISBN:
    <br>
     <input name="ISBN" type="text" value="{{old('ISBN',$libro->fecha) }}">
     <br>
     </label>
    
    <label>
    Editorial:
    <br>
    <input name="editorial" type="text" value="{{old('editorial',$libro->editorial)}}">
    <br>
    </label>
   
    <br>
    <label>
        Paginas:
        <br>
        <input name="paginas" type="text" value="{{old('paginas',$libro->paginas)}}">
        <br>
        </label>
       
        <br>
    <br>
   
    <button  type="submit">Actualizar Curso</button>
   
</form>