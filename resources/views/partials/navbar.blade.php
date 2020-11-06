


<nav class="navbar navbar-expand-lg navbar-light  btn-success)"  style="background-color:#c3e8eb" >
 
  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<a class="navbar-brand" href="{{url('/')}}"><p class="text-black"><strong>Hotel la Rivera</strong>  </p> </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
     <ul class="navbar-nav ">

      
    <main class="container">
    <!-- hotel -->
        <div class="dropdown mb-3">
            <button class="btn btn alert-dismissible dropdown-toggle " type="button" id="dropdownMenuBoton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <strong class="text-black">Hotel</strong> 
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
            <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
            <a class="dropdown-item" href="{{url('/hotel/ubicación')}}">ubicacion</a>
            <a class="dropdown-item" href="{{url('/hotel/vision-mision')}}">vision-mision</a>
          
            </div>            
        </div>
      <!-- fin hotel -->

		<!--servicios-->
            <div class="dropdown mb-3">
                    <a class="btn btn alert-dismissible dropdown-toggle" role="button" id="dropdownMenuEnlace"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <strong class="text-black">servicios </strong>  </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuEnlace">
                    <a class="dropdown-item" href="{{url('/servicios/eventos')}}">Eventos</a>
                    <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
                </div>            
            </div>
        <!--fin servicios-->
		
        
    </main>    



        <li class="nav-item active" > 
        <a class="nav-link" href="{{url('reservas')}}"><strong><p class="text-black">Reservas</strong></p></a>
        </li> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
        <li class="nav-item active" > 
            <a class="nav-link" href="{{url('/contactos')}}"> <strong><p class="text-black">Contactos</strong></p></a>
            </li>

            

           
    

      

      
      
      
    </ul>
    
  </div>
 
</nav>




