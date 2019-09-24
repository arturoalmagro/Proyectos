<?php
include 'php/gestorDB.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Parkour</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="single-page-nav sticky-wrapper" id="tmNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#section1">Inicio</a></li>
					<li><a href="#section2">Sobre mi</a></li>
					<li><a href="#section3">Rutinas</a></li>
					<li><a href="#section4">Contacto</a></li>
					<li><a href="login.php" class="external" title="+templatemo page" target="_blank">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="section1">
		<header id="header-area" class="intro-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="header-content">
							<h1>Parkour</h1>
							<h4>El arte de desplazarse</h4>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div id="section2">

		<!-- Sobre mi -->
		<section id="blog-area">
			<div class="container">
				<div class="row text-center inner">
					<div class="col-sm-6">
						<div class="blog-content">
							<br>
							<h2>Quien soy?</h2>
							<hr class="hr">
							<p>Aqui mi descripcion y cosas mias.</p>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="blog-content">
								<br>
								<h2>Objetivos?</h2>
								<hr class="hr">
								<p>Objetivos,etc..</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- FIN Sobre mi -->
			</div>
			<div id="section3">
				<!-- Titulo y pequeña descricpion del area de Rutinas -->
				<section id="services-area" class="services-section">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center inner our-service">
								<div class="service">
									<h1>Rutinas</h1>
									<p>Entrenamiento para parkour: cómo aprender y mejorar tu técnica</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- FIN titulo y description del area de Rutinas -->

					<!-- Aqui pondremos las rutinas con imagen, titulo, descripcion -->
							<div class="row">
								<div class="col-sm-6 rutinas">
									<div class="blog-content">
										<img src="img/rutinas/saltos.jpg" alt="Image" height="240" width="555">
										<h2>Saltos</h2>
										<p>Los escalones de un edificio son un lugar adecuado para iniciarse por sus diferentes niveles. Subir uno o dos escalones parece sencillo de un salto, pero antes de avanzar a un peldaño más se tiene que ser capaz de hacer diez repeticiones aterrizando con los dedos de los pies. Llegar a tres o cuatro escalones es tener buen nivel de salto, mientras que cinco o seis indican una gran capacidad. Para practicar saltos de obstáculos lo mejor es salir a la calle y buscar alguna barandilla que no sea muy alta y sea fácil de agarrar. En ella se podrán ir practicando los movimientos del parkour, sin que suponga un gran desafío.</p>
											<p id="blofr"></p>
										</div>
									</div>
							</div>
						</div>



					</section>
					<!-- Fin Rutinas -->
				</div>
				<div id="section4">
					<!-- Start Contact Area -->
					<section id="contact-area" class="contact-section">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 text-center inner">
									<div class="contact-content">
										<h1>contact form</h1>
										<div class="row">
											<div class="col-sm-12">
												<p>Nunc diam leo, fringilla vulputate elit lobortis, consectetur vestibulum quam. Sed id <br>
													felis ligula. In euismod libero at magna dapibus, in rutrum velit lacinia. <br>
													Etiam a mi quis arcu varius condimentum.</p>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<form action="#" method="post" class="contact-form">
											<div class="col-sm-6 contact-form-left">
												<div class="form-group">
													<input name="name" type="text" class="form-control" id="name" placeholder="Name">
												  	<input type="email" name="email" class="form-control" id="mail" placeholder="Email">
													<input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-sm-6 contact-form-right">
												<div class="form-group">
													<textarea name="message" rows="6" class="form-control" id="comment" placeholder="Your message here..."></textarea>
													<button type="submit" class="btn btn-default">Send</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</section>
						<!-- End Contact Area -->
					</div>

					<!-- Start Footer Area -->
					<footer id="footer-area">
						<div class="container">
							<div class="row text-center">
								<div class="col-sm-12">
									<div class="footer-content">
										<h1>Citas del dia</h1>
										<?php
										$citas = getCitas();

										echo '<p>'.$citas[array_rand(getCitas())].'</p>';

										?>

										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<p class="copy">Copyright © 2019 Arturo</p>
									</div>
								</div>
							</div>
						</footer>
						<!-- End Footer Area -->

						<script src="js/jquery-1.11.2.min.js"></script>
						<script src="js/jquery.scrollUp.min.js"></script> <!-- https://github.com/markgoodyear/scrollup -->
						<script src="js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->
						<script src="js/parallax.js-1.3.1/parallax.js"></script> <!-- http://pixelcog.github.io/parallax.js/ -->
						<script>

    // HTML document is loaded. DOM is ready.
    $(function() {

    // Parallax
        $('.intro-section').parallax({
        	imageSrc: 'img/bg-1.jpg',
        	speed: 0.2
        });
        $('.services-section').parallax({
        	imageSrc: 'img/bg-2.jpg',
        	speed: 0.2
    	});
        $('.contact-section').parallax({
        	imageSrc: 'img/bg-3.jpg',
        	speed: 0.2
        });

        // jQuery Scroll Up / Back To Top Image
        $.scrollUp({
                scrollName: 'scrollUp',      // Element ID
		        scrollDistance: 300,         // Distance from top/bottom before showing element (px)
		        scrollFrom: 'top',           // 'top' or 'bottom'
		        scrollSpeed: 1000,            // Speed back to top (ms)
		        easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
		        animation: 'fade',           // Fade, slide, none
		        animationSpeed: 300,         // Animation speed (ms)
		        scrollText: '', // Text for element, can contain HTML
		        scrollImg: true            // Set true to use image
            });

        // ScrollUp Placement
        $( window ).on( 'scroll', function() {

            // If the height of the document less the height of the document is the same as the
            // distance the window has scrolled from the top...
            if ( $( document ).height() - $( window ).height() === $( window ).scrollTop() ) {

                // Adjust the scrollUp image so that it's a few pixels above the footer
                $('#scrollUp').css( 'bottom', '80px' );

            } else {
                // Otherwise, leave set it to its default value.
                $('#scrollUp').css( 'bottom', '30px' );
            }
        });

        $('.single-page-nav').singlePageNav({
        	offset: $('.single-page-nav').outerHeight(),
        	speed: 1500,
        	filter: ':not(.external)',
        	updateHash: true
        });

        $('.navbar-toggle').click(function(){
        	$('.single-page-nav').toggleClass('show');
        });

        $('.single-page-nav a').click(function(){
        	$('.single-page-nav').removeClass('show');
        });

    });
</script>
</body>
</html>
