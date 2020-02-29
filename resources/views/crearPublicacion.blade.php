@extends('layouts/default')

  <?php
    // session_start();
    // require_once('classes/Usuario.php');
    // require_once('classes/Ciudad.php');
    // require_once('classes/Categoria.php');
    // require_once('classes/Connection.php');
    // $conn = new Connection();
    // $pdo = $conn->start();
    // $ciudad = new Ciudad("","");
    // $ciudades = $ciudad->getCiudades($pdo);
    // $categoria = new Categoria("","");
    // $categorias = $categoria->getCategorias($pdo);


    $usuario = $usuario = isset($_SESSION['usuario']) ? unserialize($_SESSION["usuario"]) : false;
    if ($usuario) $usuarioLog = true;
    //foto cookie
    $errFoto = isset($_COOKIE['fotoIncorrecta']) ? $_COOKIE['fotoIncorrecta'] : 'Agregá tus fotos (3 obligatoriamente) !';
    
    $col = $errFoto == 'Hubo un problema al cargar las fotos!' ? 'style="color: red"' : 'style="color: black"'; 
    //datos formulario
    
    //
    $titulo = "Publicar Producto";
    $producto = false;
    // require_once('head.php'); 
    
    
  ?>

  <body>

	<!-- <div id="preloder">
		<div class="loader"></div>
	</div>

	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
			<input type="text" id="search-input" placeholder="Buscar Productos...">
			</form>
		</div>
	</div> -->

<?php 
  $tituloPag = "Creá Tu publicación";
  // require_once('anuncios.php');
?>
@section('ads')
  @include('../inserts/anuncios')
  @include('../inserts/anuncioYtitulo')    
@endsection

@section('content')
    
  <ul style="color:red">
    @foreach ($errors->all() as $error)

        <li>{{$error}}</li>

    @endforeach

  </ul>
    {{-- <br> --}}
    {{-- <h1>Creá tu Publicación!</h1> --}}
    {{--<br> --}}
    <form class="container-fluid col-8" method="POST" action="/crearPublicacion" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="nombreProducto">Nombrá tu publicación:</label>
        <input name="name" type="text" class="form-control" id="nombreProducto" placeholder="Iphone X 128GB" required autofocus value='{{old('name')}}'>
      </div>
      <div class="form-group">
        <label for="ciudad">Ciudad</label>
        <!-- <input name="ciudad_id" type="number" class="form-control" id="ciudad" placeholder="1" required > -->
        <select name="ciudad" id="ciudad"  class="js-example-basic-single" placeholder="buscá tu ciudad" value='{{old('ciudad_id')}}' required>
          
          @foreach ($ciudades as $ciudad)
            <option value="<?=$ciudad->id?>" name="ciudad_id" > <?=$ciudad->nombre?> </option> 
          @endforeach
              
          
        </select>
      </div>
      <div class="form-group">
        <label for="categoriaProducto">Selecciona la categoría que creas conveniente:</label>
        <!-- <select name="categoria" class="form-control" id="categoriaProducto" data-live-search="true" > -->
          <select name="categoria" id="categoriaProducto"  class="js-example-basic-single" placeholder="buscá tu categoría" value='{{old('categoria')}}' required>
          @foreach ($categorias as $categoria)
            <option value="<?=$categoria->id?>" name="categoria_id" > <?=$categoria->name?> </option> 
          @endforeach ?>
        </div>
        <div class="form-group">
          <label for="descripcionProducto">Descripción</label>
          <textarea name="descripcion" class="form-control" id="descripcionProducto" rows="3"  placeholder="Ingresá una descripción apropiada de tu producto...">
            @if (trim(old('descripcion')) != ' ')
            {{old('descripcion')}}
            @endif
          </textarea>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <div class="form-check">
            <input class="form-check-input"  type="checkbox" id="myCheck"  onclick="myFunction()">
            <label name="is_usado" class="form-check-label" for="defaultCheck1">
              ¿Es usado?
            </label>
          </div>
        </div>
        <div class="col-md-4 mb-3" id="divAInsertar">
          <label for="cantidadMesesUso">Cantidad de Meses de uso</label>
          <input name="meses_uso" type="number" class="form-control" id="cantidadMesesUso" placeholder="1" required  disabled value='{{old('meses_uso')}}'>
    
        <label for="estadoUsoProducto">Selecciona el estado más acorde a tu producto</label>
        <select name="estado_uso" class="form-control custom-select " id="estadoUsoProducto" data-live-search="true" disabled value='{{old('estado_uso')}}'>
          <option value="1">Semi-nuevo</option>
          <option value="2">Uso regular</option>
        <option value="3">Uso intenso</option>
        <option value="4">Daños anormales por uso</option>
        <option value="5">Apenas funcional</option>
        <option value="6">Venta como partes para repuesto</option>
        </select>
      </div>
    </div>
    <div class="form-check">
      
      

    </div>
    <br>
    <div class="form-group">
      <label class="sr-only" for="inlineFormInputGroup">Precio</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">$</div>
        </div>
        <input name="precio" type="number" class="form-control" id="inlineFormInputGroup" placeholder="Precio" value='{{old('precio')}}'>
      </div>
      <div class="form-group custom-file">
        <label for="fotoProducto" class="custom-file-label" lang="es" <?=$col?> ><?=$errFoto?></label>
          <input name="fotos[]" type="file" class="custom-file-input" id="fotoProducto" multiple>
        </div>
        <br>
        <div class="form-check">
          <br>
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Acepto los Términos y Condiciones de Manaos-Libre
          </label>
      </div>
      {{-- <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
        <label class="form-check-label" for="defaultCheck2">
          Disabled checkbox
        </label>
      </div> --}}
      <br>
      <button type="submit" class="btn btn-primary btn-lg btn-block">Crear Publicación</button>
      <br>
    </form>
  </div>

@endsection


@section('scripts')

<script>
    function myFunction() {
    // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var text = document.getElementById("cantidadMesesUso");
        var estadoUso = document.getElementById("estadoUsoProducto");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
            text.disabled = false;
            estadoUso.disabled = false;
        } else {
            text.disabled = true;
            estadoUso.disabled = true;
        }
    }

    $(document).ready(function () {
        $('.js-example-basic-single').selectize({
            sortField: 'text'
        });
    });
</script>
       
  @endsection