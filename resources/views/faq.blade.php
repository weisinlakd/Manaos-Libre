@extends('layouts.default')

@section('php')
    
  <?php
    
  $producto = false;
  $titulo = 'Preguntas Frecuentes';
  
  ?>
@endsection
  
@section('content')
    
<div class="container-fluid p-0"><!-- Contenedor -->
      
      <div class="row color-4 p-3 text-center m-0"><!-- Informacion General -->
        <div class="col-12">
          <h2>Manaos Libre</h2>
        </div>
        <div class="col-12">
          <p>Proyecto integrador del curso "Full Stack Dev" de Digital House, basado en un catalogo de productos
            o también llamado e-commerce realizado con Laravel. </p>
          </div>
          <div class="col-12 col-md-6">
            <div class="col-12">
              <h3>Contenido</h3>
          </div>
          <div class="col-12 text-left">
            <ul>
              <li>POO</li>
              <li>Routing</li>
              <li>File upload</li>
              <li>Session</li>
              <li>MySQL database</li>
              <li>DER y UML</li>
              
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="col-12">
            <h3>Integrantes</h3>
          </div>
          <div class="col-12 text-left">
            <ul>
              <!-- <li>Luciano Laurent - Scrum Master</li> -->
              <li>Fausto Castillo - Product Owner</li>
              <!-- <li>Agustin Magliola - Dev</li> -->
              <li>Luciano Ludueña - Dev</li>
            </ul>
          </div>
        </div>
      </div><!-- (Fin)  Informacion General -->
      
    </div><!-- (Fin)Contenedor -->
    
@endsection
    