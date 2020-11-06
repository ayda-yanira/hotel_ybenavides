@extends('layouts.master')
@section('content')

<!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="../img/8.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Button -->
  <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
      class="fas fa-chevron-right pl-1"></i></a>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">HISTORIA DEL HOTEL LA RIVERA</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">El Riviera abrió el 20 de abril de 1955 como el primer edificio de altura y el noveno resort en cartagena de Indias. El Riv era uno de los casino-resort más viejos y famosos en Las Cartagena. El Riviera también rompió esquemas en su diseño; anteriormente, los resorts del Strip se asemejaban a moteles
El Riviera fue construido por un grupo de inversionistas de Miami. El resort pasó por muchos dueños durante toda su historia, incluyendo un periodo en el que el hotel era operado por la mafia (al igual que otros resorts en Las Vegas en los años 1960 y 1970). Harpo Marx y Gummo Marx tenían intereses menores en la apertura, además de Dean Martin, quien fue administrador del showroom del complejo.</p>

  </div>

  <!-- Card footer -->
  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
    <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
            class="far fa-comments pr-1"></i>12</a></li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1">
          </i>21</a></li>
      <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
    </ul>
  </div>

</div>
<!-- Card -->
@stop