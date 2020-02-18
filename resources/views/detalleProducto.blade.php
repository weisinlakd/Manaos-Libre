@extends('layouts/default')

@section('php')

    @if ($producto != null)
        {{$titulo = $producto->name}}
    @else
        {{$titulo = 'No existe'}}
    @endif
@endsection

@section('style')
<style>
    .carousel-control-prev.hola {
    left: -90px;
    }
    .carousel-control-next.hola {
    right: -90px;
    }
    
    @media screen and (max-width: 600px) {
        .carousel-control-prev.hola {
        left: -27px;
        }
        .carousel-control-next.hola {
        right: -27px;
        }
    }
    
    .importante {
        color: black;
    }
    
    .img-home {
        min-width: 12em;
        max-width: 12em;
        min-height: 12em;
        max-height: 12em;
    }
    
</style>
    
@endsection

@section('content')
    
    <ul>
        
        <br>
        @if ($producto !=null)  
        <li>id: {{$producto->id}}</li>
        <li>nombre: {{$producto->name}}</li>
        <li>precio: ${{$producto->precio}}</li>
        <li>descripción: {{$producto->descripcion}}</li>
        <br>
        @else
        <li>No hay Producto con ese id!</li>
        @endif

    </ul>

    <form action="/borrarPublicacion" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$producto->id}}">
        <input type="submit" value="Borrar Publicación">
        
    </form>
    <br>
@endsection

