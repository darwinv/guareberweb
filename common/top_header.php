<!DOCTYPE html> 
<html lang="es"> 
<head> 	 
	<meta charset="UTF-8" /> 
	 <meta name="description" content="FUNDACION SIN FINES DE LUCRO elaborado con HTML5 y CSS3"> 
	 <meta name="keywords" content="HTML5, CSS3, JavaScript"> 
 	 <title>Guareber Tech Ong</title> 
     <link rel="stylesheet" href="../css/jquery.fancybox.css">
     <link rel="stylesheet" href="../css/galeria.css">
 	 <link rel="stylesheet" href="../css/estilos.css">
	 <link rel="stylesheet" href="../css/estilos_RedesSociales.css" type="text/css" /> 
     <link rel="stylesheet" href="../css/global.css"><!--este es de la seccion de noticias-->	
     
     <script src="../js/jquery-1.6.4.min.js"></script><!--libreria-->
	 <script type="text/javascript"><!--DICE QUIEN ES EL QUE VA A APARECER EN EL SPAN--><!--ESTO ES PARA EL MENU-->
		$(document).ready(function () {
				//function getValue(){
					$('#value').load('noticias.php');
				// }
					//setInterval(getValue, 5000);
			});
	</script>
    
</head> 

<body>	 
 		<header>
			<div><img class="spacer" src="./imagenes/mm_spacer.gif" width="0.1%" height="0%"></div>
		    <a href="./index.php">
				<div class="contenedor" id="uno">
					
						<img class="icon" src="../imagenes/icon1.png">
						<p class="texto">Inicio</p>
						<p class="texto">&nbsp;</p>
					
				</div>
			</a>
			<a href="">
				<div class="contenedor" id="dos">
				
					<img class="icon" src="../imagenes/icon2.png">
					<p class="texto">Proyectos</p>
					<p class="texto">&nbsp;</p>
				</div>
			</a>	
			<a href="./galeria.php">
				<div class="contenedor" id="tres">
					<img class="icon" src="../imagenes/icon3.png">
					<p class="texto">Galer&iacute;a</p>
					<p class="texto">&nbsp;</p>
				</div>	
			</a>
			<a href="quienes_somos.php">
				<div class="contenedor" id="cuatro">
					<img class="icon" src="../imagenes/icon4.png">
					<p class="texto">&iquest;Quienes Somos&quest;</p>
					<p class="texto">&nbsp;</p>
				</div>	
			</a>
			<a href="">
				<div class="contenedor" id="cinco">
					<img class="icon" src="../imagenes/icon5.png">
					<p class="texto">Contactenos</p>
					<p class="texto">&nbsp;</p>
				</div>	
			</a>
			<a href="">
				<div class="contenedor" id="seis">
					<img class="icon" src="../imagenes/icon6.png">
					<p class="texto">Dona</p>
					<p class="texto">&nbsp;</p>
				</div>
			</a>	
	   </header>
<?php 
include('redes_sociales.php');
?>