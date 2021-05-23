<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IndexFauvismo_Resultado</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
	<main>
		<header>
			<nav>

				<div class="bus">

				<form action="resultados_buscar.php" method="post">
   				<label>
				<input id="barrita" type="search" name="buscar" placeholder="Buscar..." />
    			<img src="imagenes/lupita.png" type="submit" name="enviar" value="Enviar">
    			</label>
    			</form>
				</div>
				
				<div class="logo">
					<a href="index.html"><img src="imagenes/logg.png" class="logo"></a>
					
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

<section id="seccion">

	<?php

@$buscar=$_POST['buscar'];
echo "Su consulta: <em>".$buscar."</em><br>";

$conexion=mysqli_connect("localhost","root","", "pd3") or die ("No se realizó la conexión al servidor");

$consulta=mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>
<article style="width:66%;margin:0 auto;padding:10px;">
	<p>Cantidad de Resultados: 
	<?php
	$nros=mysqli_num_rows($consulta);
	echo $nros;
	?></p>
    
	<?php
while($resultados=mysqli_fetch_array($consulta)) {

	?>
    <p>
    <?php	
	echo $resultados['nombre']." ";
	echo $resultados['apellido'];
	echo $resultados['bio'];
	?>
    </p>
     <img id="lafotoimporta" src="<?php echo $resultados['foto'];?>">
    <hr />
    <?php
}

mysqli_free_result($consulta);
mysqli_close($conexion);


?>
	</article>		
</section>

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