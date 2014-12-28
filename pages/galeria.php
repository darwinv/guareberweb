<?php 
include('../common/top_header.php');
?>

<div id="content" class="cuerpo">
	   <div id="agrupar">
	   		<div class="galerFotos">
				 <h1>Bienvenido a nuestra Galeria</h1><!-- header-->
				 </br>
				 <div class="gallery">
					<ul>
					<li><a class="fancybox" rel="group" href="../imagenes/galeria/logo.jpg"><img src="../imagenes/galeria/logo.jpg" alt="" width="200" height="200"></a></li>
					<li><a class="fancybox" rel="group" href="../imagenes/galeria/ingenieros.png"><img src="../imagenes/galeria/ingenieros.png" alt="" width="200" height="200"></a></li>
					<li><a class="fancybox" rel="group" href="../imagenes/galeria/ciencia.jpeg"><img src="../imagenes/galeria/ciencia.jpeg" alt="" width="200" height="200"></a></li>
					</ul>
					<ul>
					<li><a class="fancybox" rel="group" href="../imagenes/galeria/matrix.jpg"><img src="../imagenes/galeria/matrix.jpg" alt="" width="200" height="200"></a></li>
					<li><a class="fancybox" rel="group" href="../imagenes/galeria/astronauta.jpeg"><img src="../imagenes/galeria/astronauta.jpeg" alt=""width="200" height="200"></a></li>
					<li><a class="fancybox" rel="group" href="../imagenes/galeria/choice.jpg"><img src="../imagenes/galeria/choice.jpg" alt="" width="200" height="200"></a></li>
					</ul>
				</div>
			 </div>	
			 
		</div> <!-- agrupar-->
</div> <!-- cuerpo-->
				   

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" ></script>
<link rel="stylesheet" href="../imagenes/galeria/source/jquery.fancybox.css" type="text/css" media="screen"/>
<script type="text/javascript" src="../imagenes/galeria/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

<?php 
include('../common/footer.php');
?>


