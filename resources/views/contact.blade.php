@extends('layouts.default')

@section('php')
    
  <?php
    
  $producto = false;
  $titulo = "Contacto";
  $tituloPag = 'Contacto';
  ?>
@endsection
  
@section('ads')
    @include('inserts.anuncioYtitulo')
@endsection
@section('content')
    
<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form action="#" class="contact-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Nombre(s)">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Apellido(s)">
                        </div>
                        <div class="col-lg-12">
                            <input type="email" placeholder="E-mail">
                            <input type="text" placeholder="Asunto">
                            <textarea placeholder="Mensaje"></textarea>
                        </div>
                        <div class="col-lg-12 text-right">
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="contact-widget">
                    <div class="cw-item">
                        <h5>Ubicación</h5>
                        <ul>
                            <li>Tremenda Calle 563, </li>
                            <li>Córdoba, ARG</li>
                        </ul>
                    </div>
                    <div class="cw-item">
                        <h5>Teléfono</h5>
                        <ul>
                            <li>+54351 535-459222</li>							
                        </ul>
                    </div>
                    <div class="cw-item">
                        <h5>E-mail</h5>
                        <ul>
                            <li>a@abc.com</li>
                            <li>www.manaos-libre.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="map">
            <div class="row">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sCordoba%20Argentina%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd" height="560" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div> -->
    </div>
</div>
    
@endsection
    