@extends('layouts.default')

@section('php')
    <?php
    $titulo = 'Home';
    $notHome = false; 
    ?>
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
@endsection

@section('style')
    
<style>
      body {
        /* background-color: lightgray; */
      }
      .img-home {
        min-width: 12em;
        max-width: 12em;
        min-height: 12em;
        max-height: 12em;
        border-radius: 25%;

      }
      .importante {
      color: black;
      font-size: 3em;
    }
    </style>
@endsection

@section('content')
<div id="preloder">
  <div class="loader"></div>
</div>
@include('inserts.slider-home')
<br>
<div class="container">
  
      <div class="col-md-12">

        <h2><b>Más Votados</h2>
        
        <br>
<div class="your-class">
       
  @foreach ($masVotados as $producto) 
  
  @include('inserts.producto-home')
  @endforeach
    </div>
  </div>
</div>

<br>
<div class="container">
  
      
        <h2><b>Más Baratos</h2>
        <br>
<div class="your-class">
       
  @foreach ($masBaratos as $producto) 
  
  @include('inserts.producto-home')
  @endforeach
      
  </div>
</div>
@endsection

@section('scripts')
    
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js" defer></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        slidesToShow: 4,
  slidesToScroll: 4,
  autoplay: true,
  infinite: false,
  autoplaySpeed: 4000,
  dots: true,
  arrows: true,
  prevArrow: `<button type="button" class="slick-prev" style="background-color: gray; border-radius: 50%">Previous</button>`,
  nextArrow: `<button type="button" class="slick-next" style="background-color: gray; border-radius: 50%">Next</button>`,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    });
  </script>

@endsection
