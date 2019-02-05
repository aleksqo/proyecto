@extends('layouts.master')
@section('contents')
	<h3>Todos los productos</h3>


<table class="table table-responsive">
  <thead>
    <tr>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        <th>Precio</th>
    </tr>
  </thead>

  <tbody>

    @foreach($productos as $producto)
      <tr>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->categoria}}</td>
        <td>{{$producto->descripcion}}</td>
        <td>{{$producto->precio}}</td>
        <td>
            <button type="button" class="btn btn-primary" data-minombre="{{$producto->nombre}}" data-micategoria="{{$producto->categoria}}" data-midescripcion="{{$producto->descripcion}}" data-miprecio="{{$producto->precio}}" data-prodid="{{$producto->id}}" data-toggle="modal" data-target="#editar"> Editar</button>/
            <button type="button" class="btn btn-danger" data-prodid="{{$producto->id}}" data-toggle="modal" data-target="#eliminar">Eliminar</button> </td>
    </tr>
    @endforeach
     </tbody>
  

</table>






	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Agregar producto
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Producto</h4>
      </div>
      <form action="{{route('producto.store')}}" method="post">
      
      {{csrf_field()}}
      <div class="modal-body">
        
          @include('producto.form')

          </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar producto</h4>
      </div>
      <form action="{{route('producto.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
      <div class="modal-body">
      <input type="hidden" name="producto_id" value="{{$producto->id}}">
          @include('producto.form')

          </div>
      
      <div class="modal">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">guardar cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal modal-danger " id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Confirmar eliminacion</h4>
      </div>
      <form action="{{route('producto.destroy','test')}}" method="post">
      {{method_field('delete')}}
      {{csrf_field()}}
      <div class="modal-body">
      <p class="text-center">
        Esta seguro de eliminar el producto?
      </p>


      <input type="hidden" name="producto_id" value="{{$producto->id}}">
   

          </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No, Cancelar</button>
        <button type="submit" class="btn btn-danger">Si, eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection