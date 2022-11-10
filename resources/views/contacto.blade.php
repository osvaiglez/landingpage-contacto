<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="templatemo">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Osvaldo González</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">



<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Contact Section -->

<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="contact-form">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                              <h1 class="color-white">¡Di Hola!</h1>
                              <p class="color-white">Puedes establecer contacto a través de este formulario.</p>
                         </div>

                         <div id="contact-form">
                              
                              @if ($errors->any()) 
                                   <div>
                                        <ul>
                                             @foreach ($errors->all() as $error)
                                                  <li>{{ $error }}</li>
                                             @endforeach
                                        </ul>
                                   </div>
                              @endif

                              <form action="/recibe-form-contacto" method='POST'>
                                   @csrf
                                   <div class="wow fadeInUp" data-wow-delay="1s">
                                        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Tu nombre" required value = {{ $nombre ?? '' }}>
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.2s">
                                        <input name="correo" type="email" class="form-control" id="correo" placeholder="Tu correo electrónico" required value = {{ $correo ?? '' }}>
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.4s">
                                        <textarea name="mensaje" rows="5" class="form-control" id="mensaje" placeholder="Escribe tu mensaje..."></textarea>
                                   </div>
                                   <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                        <input name="submit" type="submit" class="form-control" id="submit" value="Enviar">
                                   </div>
                              </form>
                         </div>

                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image contact-img"></div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="contact-thumb">
               
                         <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                              <h3 class="color-white">Contacto</h3>
                              <p><i class="fa fa-phone"></i> 33 2495 0409</p>
                              <p><i class="fa fa-envelope-o"></i> <a href="#">gonzalezascencioosvaldo@gmail.com</a></p>
                              <p><i class="fa fa-github"></i> <a href="https://github.com/osvaiglez">@osvaiglez</a></p>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>

<!-- Footer Section -->

<footer>
	<div class="container">
		<div class="row">

				<ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                         <li><a href="https://github.com/osvaiglez" class="fa fa-github"></a></li>
                         <li><a href="https://www.linkedin.com/in/osvaldo-gonz%C3%A1lez-ascencio-7a6108236/" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
			
		</div>
	</div>
</footer>