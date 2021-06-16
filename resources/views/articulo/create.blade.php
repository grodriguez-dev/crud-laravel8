@extends('layouts.plantillabase')
@section('contenido')
    <h2>CREAR REGISTROS</h2>
    <form action="{{route('articulos.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="text" class="form-control" name="codigo" id="codigo" tabidex="1" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" tabidex="2" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" tabidex="3" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio" step="any" value="0.00" id="precio" required>
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-success" >Guardar</button>
    </form>
    
@endsection