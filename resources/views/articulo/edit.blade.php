@extends('layouts.plantillabase')
@section('contenido')
    <h2>EDITAR REGISTROS</h2>
    <form action="{{route('articulos.update', $articulo->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="text" class="form-control" name="codigo" id="codigo" tabidex="1" value="{{$articulo->codigo}}" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$articulo->descripcion}}" tabidex="2" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" value="{{$articulo->cantidad}}" tabidex="3" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio" step="any" id="precio" value="{{$articulo->precio}}" required>
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-success" >Guardar</button>
    </form>
    
@endsection