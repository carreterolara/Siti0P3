<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IndexFauvismo</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="responsiveslides.css">
	 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
     />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="responsiveslides.js"></script>
 	 <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 2000,
        speed: 200
      });

    });
  	</script>
</head>

<body>
	<main>
		<header>
			<nav>

				<div class="bus">

				<form action="resultados_buscar.php" method="post">
   				<label>
				<input type="search" name="buscar" placeholder="Buscar..." />
    			<img src="lupita.png" type="button" name="enviar" value="Enviar">
    			</label>
    			</form>
				</div>
				
				<div class="logo">
					<a href="index.html"><img src="logg.png" class="logo"></a>
					
				</div>

				

				<div id="menu1">
					<ul class="minimen">
						<li>
							<a href="historia.html">HISTORIA</a>
						<ul>
							<li>
								<a href="filo.html">
									FILOSOFIA</a>
							</li>
						</ul>
						</li>
						<li>
							<a href="art.html">ARTISTAS</a>
						</li>
						<li>
							<a href="obb.html">OBRAS</a>
						</li>
						<li>
							<a href="muu.html">MUESTRAS</a>
						</li>
						<li>
							<a href="cont.html">CONTACTO</a>
						</li>
					</ul>
				</div>
				
			</nav>
		</header>

		

		<footer>
			<div id="izquierda">
		LARA CARRETERO
	</div>

	<div id="centro">
		<div id="menu2">
			<ul>
				<li>
					<a href="https://www.instagram.com" target="_blank"><img src="imagenes/instaa.png" class="redes"></a>
				</li>
				<li>
					<a href="https://www.pinterest.com" target="_blank"><img src="imagenes/pinterestame.png" class="redes"></a>
				</li>
				<li>
					<a href="https://www.twitter.com" target="_blank"><img src="imagenes/twitterame.png" class="redes"></a>
				</li>
			</ul>
		</div>
	</div>

			
		</footer>


</main>
</body>
</html>