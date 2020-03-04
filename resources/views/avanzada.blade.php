@extends('layouts.default')

@section('php')
    <?php 
    $titulo = 'Busqueda Avanzada';
    $producto = false;
    ?>
@endsection


@section('content')
<div class="container-fluid ">
    <br><br>
    <div class="row">
        <div class="col-5"> </div>
        <img class="col-2" src="../img/logoml.png" alt="logo">
        <div class="col-5"> </div>
    </div>
    <form action="/resultados-avanzados" method="get">
        {{ csrf_field() }}

        <div class="row align-items-center justify-content-center">
            
            <div class="col-md-4 pt-4">
                            Seleccioná una Ciudad
                           <div class="form-group ">
                               
                               <select name="ciudad" id="ciudad " class="js-example-basic-single" placeholder="seleccioná una ciudad">

                                @foreach ($ciudades as $ciudad)
                                <option value="{{$ciudad->id}}" >{{$ciudad->nombre}}, {{$ciudad->provincia}}</option>
                                        @endforeach
                                        
                                    </select>
                           </div>
                        </div>
                		<div class="col-md-3 pt-4">
                            Seleccioná una Categoría
                            <div class="form-group">
                                
                                <select name="categoria" id="categoria " class="js-example-basic-single" placeholder="seleccioná una categoria">
                                    
                                    @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                    @endforeach
                                    
                                </select>
                           </div>
                        </div>
                        <div class="col-md-3 pt-4">
                            Seleccioná un Vendedor
                            <div class="form-group">
                                
                                <select name="usuario" id="usuario" class="js-example-basic-single" placeholder="seleccioná un vendedor">

                                    @foreach ($usuarios as $usuario)
                                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                        @endforeach
                                    
                                    </select>
                                </div>
                        </div>
                        {{-- <div class="col-md-2 pt-3">
                            <div class="form-group">
                                <select name="" id="inputState" class="form-control">
                                <option selected>Type</option>
                                <option>BMW</option>
                                <option>Audi</option>
                                <option>Maruti</option>
                                <option>Tesla</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-md-2">
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Buscar</button>
            	        </div>
                	</div>
                </div>
            </form>
                <br><br>
                @endsection

                
@section('scripts')

<script>
    

    $(document).ready(function () {
        $('.js-example-basic-single').selectize({
            sortField: 'text'
        });
    });
</script>
       
  @endsection