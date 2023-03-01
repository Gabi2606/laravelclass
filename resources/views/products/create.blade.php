@extends('layout.template')

@section('title', 'Productos')

@section('content')

<form action="{{url('/productos')}}" method="post">
    @csrf

<label for="">Nombre del producto</label>
<br>
<br>
<input type="text" name="nombre" id="nombre">
<br>
<br>
<label for="">Precio del producto</label>
<br>
<br>
<input type="text" name="precio" id="precio">
<br><br>

<button type="submit">Guardar producto</button>

</form>


@endsection