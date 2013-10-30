<?php
if ( isset($_POST['email']) )
  {
  //send email
  $email = $_POST['email'] ;
  $asunto = $_POST['asunto'] ;
  $nombre = $_POST['nombre'] ;
  $mensaje = $_POST['mensaje'] ;
  mail("raul@zamacona.me", 'Mail de la página, ',
  $message, "From:" . $email);
  }
else
  {
  echo "<h2>Hubo un error, por favor vuelve a intentarlo</h2>";
  }
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Saber para Crecer</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css">

</head>
<body>

	<div class="container">
		
		<div class="header cf">

			<div class="logo">
				<h1>
				  <a href="#">
				    <img src="images/logo_saber.png" alt="Saber para Crecer" />
				  </a>
				</h1>
			</div><!-- logo -->

			<ul class="social_media cf">

				<li>
					<a href="#" target="_blank">
						<img src="images/fb.png" alt="Facebook">
					</a>
				</li>

				<li>
					<a href="#" target="_blank">
						<img src="images/tw.png" alt="Twitter">
					</a>
				</li>

				<li>
					<a href="#" target="_blank">
						<img src="images/yt.png" alt="Youtube">
					</a>
				</li>
			
			</ul><!-- social_media -->
			
		</div><!-- header -->

		<div class="main">

			<div class="content cf programas">
				
				<h2>Contacto</h2>

				<h4>Gracias, nos pondrémos en contacto contigo.</h4>
				
				

			</div><!-- content -->

			<ul class="menu cf">
				<li> <a href="http://www.saberparacrecer.org/">Inicio</a> </li>
				<li> <a href="http://www.saberparacrecer.org//historia.html">Historia</a> </li>
				<li> <a href="http://www.saberparacrecer.org/filosofia">Filosofía</a> </li>
				<li> <a href="http://www.saberparacrecer.org/mision">Misión</a> </li>
				<li> <a href="http://www.saberparacrecer.org/programa">Programa</a> </li>
				<li> <a href="http://www.saberparacrecer.org/contacto">Contacto</a> </li>
			</ul><!-- menu -->

			<div class="galeria">
				
				<h2>Galería</h2>

				<div id="slider-code">
				    <a class="buttons prev" href="#">
				    	<img src="images/left.png" alt="izquierda">
				    </a>
				    <div class="viewport">
				        <ul class="overview">
				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_1.jpg">
				            	<li><img src="images/ninios/ninio_1.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_2.jpg">
				            	<li><img src="images/ninios/ninio_2.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_3.jpg">
				            	<li><img src="images/ninios/ninio_3.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_4.jpg">
				            	<li><img src="images/ninios/ninio_4.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_5.jpg">
				            	<li><img src="images/ninios/ninio_5.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_6.jpg">
				            	<li><img src="images/ninios/ninio_6.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_7.jpg">
				            	<li><img src="images/ninios/ninio_7.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_8.jpg">
				            	<li><img src="images/ninios/ninio_8.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_9.jpg">
				            	<li><img src="images/ninios/ninio_9.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_10.jpg">
				            	<li><img src="images/ninios/ninio_10.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_11.jpg">
				            	<li><img src="images/ninios/ninio_11.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_12.jpg">
				            	<li><img src="images/ninios/ninio_12.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_13.jpg">
				            	<li><img src="images/ninios/ninio_13.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_14.jpg">
				            	<li><img src="images/ninios/ninio_14.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_15.jpg">
				            	<li><img src="images/ninios/ninio_15.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_16.jpg">
				            	<li><img src="images/ninios/ninio_16.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_17.jpg">
				            	<li><img src="images/ninios/ninio_17.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_18.jpg">
				            	<li><img src="images/ninios/ninio_18.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_19.jpg">
				            	<li><img src="images/ninios/ninio_19.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_20.jpg">
				            	<li><img src="images/ninios/ninio_20.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_21.jpg">
				            	<li><img src="images/ninios/ninio_21.jpg" /></li>
				            </a>

				            <a class="fancybox" rel="ninio" href="images/ninios/ninio_big_22.jpg">
				            	<li><img src="images/ninios/ninio_22.jpg" /></li>
				            </a>

				        </ul>
					</div>
				    <a class="buttons next" href="#">
				    	<img src="images/right.png" alt="Derecha">
				    </a>
				</div>

			</div><!-- galeria -->
			
		</div><!-- main -->

		<div class="footer">

			<p> <span>Saber para Crecer A.C.</span>, Calle Hidalgo No. 58, Col. Cuajimalpa, Delegación de Morelos, México 05000, D.F. <span>Tel. 58. 13.32.97</span></p>
			
		</div><!-- footer -->

		<script type="text/javascript" src="js/jquery.js" ></script>
		<script type="text/javascript" src="js/cycle.js" ></script>
		<script type="text/javascript" src="js/tinycarousel.js" ></script>
		<script type="text/javascript" src="js/fancybox/jquery.fancybox.js" ></script>
		<script type="text/javascript" src="js/functions.js" ></script>

	</div><!-- container -->

</body>
</html>