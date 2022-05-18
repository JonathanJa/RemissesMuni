<!DOCTYPE html>
<html>
<head>
	<title>	</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!--link href='http://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'-->


  
  <!-- Libraries CSS Files -->
  <link href="marco/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="marco/lib/animations/animations.css" rel="stylesheet">
  <link href="marco/lib/hover-pack/hover-pack.css" rel="stylesheet">


 
	

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>








	<style type="">
		.conte{

			
		
			margin-bottom: 2%;
			
			padding-top: 0%;
			padding-left: 0%;
			padding-right: 0%;
			padding-bottom: 2%;
			margin-top: -2%;	
		}


		.elejirnos{

				margin-left:  5%;
			margin-right: 5%;
			margin-bottom: 2%;
			padding-top: 0%;
			padding-left: 2%;
			padding-right: 2%;
			padding-bottom: 2%;
			margin-top: -2%;	

		}

	


		/* make overflow hidden from viewport on touch devices */
		.touch #viewport-wrapper {
			overflow: hidden;
		}

		.conte1{
				margin-left:  0%;
			margin-right: 0%;
			margin-bottom: 2%;
			
			padding-top: 0%;
			
			


		}

		#cambialetra2, h3{


			 
			color:black;
			text-align: center;
			margin-top:1%; 
				

				
			font: small-caps 100%/200% serif;
			font-size: 200%;

			 
		}
		
		 #cambiaLetra, h3 {


			 
			color:black;
			text-align: center;
			margin-top:1%; 
				

				
			font: small-caps 100%/200% serif;
			font-size: 200%;

		}


		body{

			
			font-family: sans-serif;
		}





ul {
  list-style: none;
}

a {
  color: inherit;
  text-decoration: none;
}

/*body {
  margin: 30px 0;
  font: 22px sans-serif;
  background: var(--body-bg-color);
  color: var(--text-color);
}

hr {
  border-color: var(--hr-color);
  margin: 20px 0;
}*/

.menu {
  display: flex;
  justify-content: center;
}






.menu .li {
  margin-right: 70px;
}





.menu a {
  position: relative;
  display: block;
  overflow: hidden;
}

.menu a span {
  transition: transform 0.2s ease-out;
}

.menu a span:first-child {
  display: inline-block;
  padding: 10px;
}

.menu a span:last-child {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transform: translateY(-100%);
}

.menu i {
  font-size: 30px;
}

.menu a:hover span:first-child {
  transform: translateY(100%);
}

.menu a:hover span:last-child,
.menu[data-animation] a:hover span:last-child {
  transform: none;
}

/* ANIMATIONS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.menu[data-animation="to-right"] a span:last-child {
  transform: translateX(-100%);
}


#na{

	background-color: #3F3F3F ;
}
#na:hover{

	padding-top: 0.6%;
}



  label{ color:grey;}




#form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}

label {
  color: grey;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}

	</style>





	<script type="text/javascript">
		
$(document).ready(function(){


     $("#fancyOther").fancybox({
        width   : '70%',
        height    : '70%',
        maxWidth  : 800,
        maxHeight : 600,
        fitToView : false,
        autoSize  : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
      });


    });






	</script>

</head>
 <body>
<nav class="sticky-top">
<div id="viewport-wrapper"  >
	<div id="content-wrapper" >

   <div class="card text-center " id="na">
  <div class="card-header " >
    <nav class="nav nav-pills sticky-top flex-column flex-sm-row" >
   
    <a class="navbar-brand nav-link" href="#">
      <img src="imagen/logo_muni_fsa.png" alt="" width="35" height="35" 
      class="d-inline-block align-text-top ">
      
    </a>
  

  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#">Municipalidad de transporte remis</a>

  <a class="flex-sm-fill text-sm-center nav-link"  aria-current="page" href="#">Quienes Somos</a>
  <a class="flex-sm-fill text-sm-center nav-link " id="fancyOther" data-fancybox data-type="iframe" href="contactenos.php">Contactenos</a>

  <button type="button" class="btn btn-dark position-relative">
  Ubicación <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
</button>  
  

</nav>
  

</div>

</nav>






<div class="conte1"> 


    
    
 
   <!-- Optional JavaScript; choose one of the two! -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
  <div  class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div  class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagen/carrusel-formosa.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagen/carrusel-formosa.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagen/carrusel-formosa.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<section class="m5 text-center bg-light">
      <div class="container">
        <div class="row">
          <div class="m-5">
            <h3>SUBSECRETARIA DE TRANSPORTE Y EMERGENCIA

DIRECCION DE TRANSPORTE</h3>
            <p>
              El municipio trabaja en la modificación de ordenanzas para mejorar el transito en la ciudad, además de realizar un relevamiento importante para implementar el estacionamiento medido en primera medida en el casco microcentro de la ciudad.
            </p>
          </div>
        </div>
      </div>
    </section>


<section >
<!--div class="conte">


<div style="padding: 1%">
<div style=" margin-top:1%;" class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card" style="margin-left: 6%; margin-right: 6%">
      <img src="imagen/RemisLargaDistancia.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Servicios</h5>
        <p class="card-text">Tambien brindamos servicios a larga distancia</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="margin-left: 6%; margin-right: 6%" >
      <img src="imagen/remisEjecu.png" width="272" height="320"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Remis Ejecutivo</h5>
        <p class="card-text">Contactenos para tener mas información</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
 </section>


<div class="elejirnos">
<h3 id="cambiaLetra2" style="margin-left: -2.4%; margin-right:-2.4%; ">Agencia de remises</h3>



<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <ul class="menu">
  		<li>
    	 <a href="#0">
    	   <span>
    	     <img src="imagen/AtencionText.png" width="100" height="250" class="card-img-top" alt="...">
    	   </span>
      	   <span>		

      			<div class="card-body">
        			<h5 class="card-title">Atención las 24hs</h5>
         			<p class="card-text">gestionamos tu atencion en cualquier parte de la ciudad</p>
      			</div>
      	 	</span>
		 </a>
		</li>
	</ul>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <ul class="menu">
  		<li>
    	  <a href="#0">
      		<span>
      			<img src="imagen/seguridadText.png" width="250" height="250" class="card-img-top" alt="...">
      			
      		</span>
      		<span>
      
      			 <div class="card-body">
                      <h5 class="card-title">seguridad</h5>
        		      <p class="card-text">Garantisamos tu seguridad</p></i>
                 </div>
            </span>
    	  </a>
  		</li>
	 </ul>	  
    </div>
  </div>
  <div class="col">
    <div class="card">
      <ul class="menu">
  		<li>
    	  <a href="#0">
      		<span>
      			<img src="imagen/trayectoriaText.png" width="250" height="250" class="card-img-top" alt="...">
      		</span>
      		<span>
      			<div class="card-body">
        		    <h5 class="card-title">Trayectoria</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               </div>
            </span>
    	  </a>
  		</li>
	 </ul>   
    </div>
  </div>
  <div class="col">
    <div class="card">
      <ul class="menu">
  		<li>
    	  <a href="#0">
      		<span>
      			<img src="imagen/efectivoText.png" width="250" height="250" class="card-img-top" alt="...">
      		</span>
      		<span>
      
      		     <div class="card-body">
        		   <h5 class="card-title">Cuenta Efectivo</h5>
                   <p class="card-text">Para traslados desde dentro de la provincia como asi tambien los de afuera</p>
                </div>
            </span>
    	  </a>
  		</li>
	 </ul>       
    </div>
  </div>
  <div class="col">
    <div class="card">
      <ul class="menu">
  		<li>
    	  <a href="#0">
      		<span>
      			<img src="imagen/quejasText.png" height="250" class="card-img-top" alt="...">
      		</span>
      		<span>
      
      		     <div class="card-body">
        		   <h5 class="card-title">Quejas</h5>
        			 <p class="card-text">Si el servicio no le ha gustado estaremos atento a sus quejas</p>
                </div>
            </span>
    	  </a>
  		</li>
	 </ul>       
    </div>
  </div>
  <div class="col">
    <div class="card">
      <ul class="menu">
  		<li>
    	  <a href="#0">
      		<span>
      			<img src="imagen/amabilidadText.png" height="250" class="card-img-top" alt="...">
      		</span>
      		<span>
      
      			<div class="card-body">
                   <h5 class="card-title">Amabilidad del chofer con el cliente</h5>
                    <p class="card-text">Brindamos una buena conduscta respetuosa al cliente durante su trayecto a su punto de llegada </p>
                </div>
            </span>
    	  </a>
  		</li>
	 </ul>       
    </div>
  </div>
</div-->



















<h3  id="cambiaLetra" id="fly-it">REQUISITOS PARA AFECTAR REMISES</h3> 

 <section class="container text-center p-5">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        REQUISITOS PARA EL CONDUCTOR DE LA UNIDAD A AFECTAR (Art. 29)
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p style="margin-left: -75%">1.Fotocopia de DNI (frente y dorso).</p>
        <p style="margin-left: -44%">2.Certificado de Domicilio expendido por la Policía de la Provincia de Formosa.</p>
        <p style="margin-left: -44.3%">3.Fotocopia del Carnet de Conducir Clase D1 de la Municipalidad de Formosa.</p>
        <p style="margin-left: -24%">4.Fotocopia del Carnet de Sanidad (Solicitar en la Dirección Bromatología – Calle Brandsen N° 389 - Altos).</p>
        <p style="margin-left: -39.8%">5.Certificado de Buena Conducta expedido por la Policía de la Provincia de Formosa.</p>
        
      </div>
    </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        REQUISITOS PARA AFECTAR VEHICULOS AL SERVICIO DE REMISSES
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div style="text-align: justify-all;">
        <p style="color: blue; margin-left: -44%">1. Nota de la Agencia de Remis solicitando la afectación del vehículo. (Art. 15)</p>
        <p style=" margin-left: ">2.Contrato de arrendamiento del vehículo sellado en la Dirección General de Rentas de la Provincia de Formosa. (Sito en Calle Ayacucho N°</p> <p style="margin-left: -90%">810)(Art. 15).</p>
        <p style=" margin-left: -76%">3.Estampilla Municipal para nota.</p>
        <p style=" margin-left: -13%">4.La Firma del Contrato se llevará a cabo en la Dirección de Transporte. (Sito en calle Rivadavia N° 546 - Fondo)(Art. 17).</p>
        <p style=" margin-left:">5.Fotocopia del DNI (frente y dorso) del propietario del vehículo. (También del Conyugue en el caso de que figure en el título del automotor).</p>
        <p style=" margin-left: -47%">6.Fotocopia del Titulo de Propiedad y Cedula Verde del vehículo. (Art. 22)</p>
        <p style=" margin-left: -44%">7.Certificado de Domicilio expedido por la Policía de la Provincia de Formosa.</p>
        <p style=" margin-left: ">8.Fotocopia de frente de póliza del seguro. Cobertura USO: REMIS, por el monto de $22.000.000 (Pesos veintidos millones) y último recibo</p><p style=" margin-left: -78%"> del pago del seguro. (Art. 22)</p>
        <p style=" margin-left: -46.4%">9.Certificado de Libre Deuda - Tasa de utilización de Vía Pública. (Art. 22)</p>
        <p style=" margin-left: -44%">10. Nota de la Agencia de Remis solicitando la afectación del vehículo. (Art. 15)</p>
        <div class="card" style="margin-top: 5%;">
        <div class="card-header">
            Pasos para Obtener el Certificado de Libre Deuda:
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            
              <footer style="margin-left: -32%" class="blockquote-footer"> 
                <cite title="Source Title" >Solicitar Libre de Infracciones en la Dirección de Tránsito (Calle Rivadavia N° 546).</cite>
              </footer>
              <footer style="margin-left: -13%" class="blockquote-footer"> 
                <cite title="Source Title" >Solicitar Libre de Faltas en Tribunal de Administración de Faltas Municipal (Calle Rivadavia N° 546 - Altos).</cite>
              </footer>
              <footer style="margin-left: -0.9%" class="blockquote-footer"> 
                <cite title="Source Title" >Dirigirse a Moratoria con los dos papeles antes mencionados y tramitar el Certificado de Libre Deuda. (Calle Rivadavia N° 
                </cite>
                <cite title="Source Title" style="margin-left: -90%"> 

                546).</cite>
              </footer>
          </blockquote>
  </div>
</div>
<div class="card" style="margin-top: 5%; margin-bottom: 5%">
        <div class="card-header">
            En caso de ser vehículo 0KM:
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            
              <footer style="margin-left: -68%" class="blockquote-footer"> 
                <cite title="Source Title" >Adjuntar fotocopia del formulario 13D.</cite>
              </footer>
              <footer style="margin-left: -65.4%" class="blockquote-footer"> 
                <cite title="Source Title" >Constancia de Inscripción del Automotor.</cite>
              </footer>
              <footer style="margin-left: -17.8%" class="blockquote-footer"> 
                <cite title="Source Title" >Fotocopia de Factura de Compra o remito de entrega de la unidad donde figure el color del vehículo.
                </cite>
              </footer>
                <footer>
                <cite title="Source Title" style="text-align: center"> 

                *Los colores de los nuevos automóviles habilitados serán de COLOR BLANCO sin excepción.</cite>
              </footer>
          </blockquote>
  </div>
</div>
                <p style=" margin-left:-2%">11.Odómetro con Ticketera, el ticket debe contener información sobre la distancia del viaje, la tarifa aplicada, la identificación del vehículo,</p><p style="margin-left: -74%"> la hora y el tiempo de viaje. (Art. 22)</p>
                 <blockquote>
                    <footer style="margin-left: -17.8% margin-top:3%" class="blockquote-footer"> 
                      <cite title="Source Title" style="font-size: 19px; color:black" >*Dicho odómetro deberá contar con las 3 TARIFAS: $45, $46 y $48.
                </cite>
                </blockquote>
                <p style=" margin-left: -45%">12.El vehículo propuesto no debe superar los 10 años de antigüedad. (Art. 22)</p>
                


        </div>


        </p>
      </div>
    </div>
  </div>
  
  </div>
</div>
    </section>

<section class="bg-light animation slideDown">
      <img width="350" style="margin-left: 7%; margin-bottom: 7%; margin-top: 7%" src="imagen/licencia.jpg" class="img-fluid rounded-start " alt="...">
<div style="float: right; width: 850px; margin-right: 2%; margin-top: 7%; text-align: justify; font:small-caps 100%/200% serif">

 <h5 class="card-title" style=" text-align: center; font-weight: bold;">Pasos para tramitar la Licencia de Conducir</h5>
        <p  style="padding-top: 2%" > 1. REQUISITOS para la categoría correspondiente.<a href="parteWebRequis.html" id="fancyOther" data-fancybox data-type="iframe" >http://www.formosatuciudad.gob.ar/requisitos-para-obtener-la-licencia-nacional-de-conducir</a>
        </p>
                  <p style="padding-top: 2%" >2.Generar boleta CENAT en https://boletacenat.safit.com.ar
ABONAR en un Rapipago, pago fácil etc.</p>
                      <p style="padding-top: 2%">3.PRESENTARSE con TODOS LOS REQUISITOS SOLICITADO (ver en el 1.)
mínimo 10min antes de su TURNO UNA VEZ PASADA LA HORA acordada. DEBERÁ SACAR OTRO TURNO SIN EXCEPCIÓN</p>
                      <p style="padding-top: 2%">4.Consultar si posee MULTAS de lo contrario no podrá finalizar con el trámite.</p>

</div> 
</section> 





 <section class="text-center team" style=" margin-left: margin-right: -8.1%; font:small-caps 100%/200% serif" >
      <div class="container p-3">



      <div class="col-lg-3 col-lg-offset-3" style="margin: auto">
        <h3>Nuestro Clientes</h3>
        <hr>
      </div>
    </div>
    <!-- /row -->
    <div class="row mt centered" >
      <div class="col-lg-4 desc" >
        <a class="b-link-fade b-animate-go" href="#"><img width="350" src="imagen/remis_libertad.png" alt="" / >
          <div class="b-wrapper">
              <h4 class="b-from-left b-animate b-delay03">4738-3842</h4>
              <p class="b-from-right b-animate b-delay03">Pacifico Rodriguez 5109 - V.Ballester</p>
              <form>
                  <p class="clasificacion">
                <input id="radio1" type="radio" name="estrellas" value="5"><!--
                    --><label for="radio1">★</label><!--
                    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                    --><label for="radio2">★</label><!--
                    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                    --><label for="radio3">★</label><!--
                    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                    --><label for="radio4">★</label><!--
                    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                    --><label for="radio5">★</label>
                  </p>
                </form>

          </div>
        </a>










        <p>Libertad </p>
      </div>
      <div class="col-lg-4 desc" >
        <a class="b-link-fade b-animate-go" href="#"><img width="350" src="imagen/remis_Norte.png" alt="" />
          <div class="b-wrapper">
              <h4 class="b-from-left b-animate b-delay03">3704961553</h4>
              <p class="b-from-right b-animate b-delay03">Pringles 165</p>
          </div>
        </a>
        <p>Norte</p>
      </div>
      <div class="col-lg-4 desc">
        <a class="b-link-fade b-animate-go" href="#"><img width="350" src="imagen/remis_napoleon.png" alt="" />
          <div class="b-wrapper">
              <h4 class="b-from-left b-animate b-delay03">3704427947</h4>
              <p class="b-from-right b-animate b-delay03">Av. Napoleón Uriburu 1645</p>
          </div>
        </a>
        <p>Napoleon </p>
      </div>
    </div>
    <!-- /row -->
    <!--div class="row mt centered">
      <div class="col-lg-4 desc">
        <a class="b-link-fade b-animate-go" href="#"><img width="350" src="marco/img/portfolio/port03.jpg" alt="" />
          <div class="b-wrapper">
              <h4 class="b-from-left b-animate b-delay03">Project 4</h4>
              <p class="b-from-right b-animate b-delay03">View Details</p>
          </div>
        </a>
        <p>APE - <i class="fa fa-heart-o"></i></p>
      </div>
      <div class="col-lg-4 desc">
        <a class="b-link-fade b-animate-go" href="#"><img width="350" src="marco/img/portfolio/port01.jpg" alt="" />
          <div class="b-wrapper">
              <h4 class="b-from-left b-animate b-delay03">Project 5</h4>
              <p class="b-from-right b-animate b-delay03">View Details</p>
          </div>
        </a>
        <p>RAIDERS - <i class="fa fa-heart-o"></i></p>
      </div>
      <div class="col-lg-4 desc">
        <a class="b-link-fade b-animate-go" href="#"><img width="350" src="marco/img/portfolio/port02.jpg" alt="" />
          <div class="b-wrapper">
              <h4 class="b-from-left b-animate b-delay03">Project 6</h4>
              <p class="b-from-right b-animate b-delay03">View Details</p>
          </div>
        </a>
        <p>VIKINGS - <i class="fa fa-heart-o"></i></p>
      </div>
    </div-->
    
    <!-- /row -->
  
    </section>









<br>
<br>



<br><br>
<?php 
  
  $conexion = mysqli_connect("localhost","root","","remis");
  $sql = "";


?>

<!--table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table-->
</div>
<br>
</div>





<div  style="background-color:#666565; padding:5%; margin-bottom: -2%;   ">
<img style="float: left; margin-top: -2%; margin-left: -3%;" src="imagen/logo_muni_fsa.png">	
<div class="mb-3" style="margin-left:30%; margin-right: 30%">
 
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">

</div>
<div class="mb-3" style="margin-left:30%; margin-right: 30%">
  
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Celular">

</div>
<div class="mb-3" style="margin-left:30%; margin-right: 30%">
  
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">

</div>

<div class="mb-3" style="margin-left:30%; margin-right: 30%">
  
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <br>	
  <button class="btn btn-outline-info btn-block btn-flat">Enviar</button>
</div>
	

</div>

 <small style="float: right; margin-top: -21%; font-size: 0.8em; margin-right: 3%; font-weight: bold; " >

     <div class="card text-dark bg-info mb-3" style="max-width: 22rem; ">
 		
  		<div class="card-body">
    		<i class="fa fa-mobile"></i> <b>Atencion ciudadana:</b> 0800-9999-147 | 
    		<i class="fa fa-map-pin"></i> <b>Dirección:</b> Rivadavia 645 <br>
    		<i class="fa fa-at"></i> <b>email:</b> municipalidaddetransporte@gmail.com
  		</div>
	</div>



    
 </small>

</div>
 <footer class="bg-info mb-3">
      <div class="container p-3">
        <div class="row text-center text-white">
          <div class="col ml-auto">
            <p>Municipalidad de la Ciudad de Formosa - Provincia de Formosa - República Argentina</p>
          </div>
        </div>
      </div>       
    </footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://modernizr.com/downloads/modernizr-latest.js"></script>
	<script type="text/javascript" src="js/iscroll.js"></script>
	<script type="text/javascript" src="js/polyfill.requestAnimationFrame.js"></script>
	<script type="text/javascript" src="js/greensock/TweenMax.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

   
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="FancyBox/source/jquery.fancybox.js"></script>
  	<script src="js/jquery.superscrollorama.js"></script>

 <script src="marco/lib/jquery/jquery.min.js"></script>
  <script src="marco/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="marco/lib/php-mail-form/validate.js"></script>
  <script src="marco/lib/hover-pack/hover-pack.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>



</div>
  </body>
</html>


