<?
$nombre = $_POST["nombre"];
$nombre = $_POST["empresa"];
$nombre = $_POST["telefono"];
$correo= $_POST["correo"];
$mensaje = $_POST["mensaje"];

$contenido = "Alguien ha escrito desde la página web.  Los datos son: <br><br> 
<b>Nombre<b/>: $nombre<br>
<b>Empresa<b/>: $empresa<br>
<b>Telefono<b/>: $telefono<br>
<b>Correo</b>: $correo<br>
<b>Mensaje</b>: $mensaje<br>";


$remitente = "from: Mil Esencias <contactenos@milesencias.tk>\nMIME-Version: 1.0\nContent-Type: text/html\nX-Mailer: WebMail ";
mail("sebastiansac913@gmail.com","Contacto de la pagina web",$contenido,$remitente);


//AQUI VIENE LA PARTE DE LA AUTORESPUESTA
$contenido_respuesta="Recibimos su mensaje y en el menor tiempo posible le daremos respuesta.<br><br>
Cordialmente<br><br>
MilEsencias Cali - Colombia";

mail($correo,"Recibimos su mensaje",$contenido_respuesta,$remitente);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/PlantillaPHP.dwt" codeOutsideHTMLIsLocked="false" --><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Mil Esencias</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<style type="text/css">
<!--

a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */
	text-decoration: none;
}

/* ~~ este contenedor de anchura fija rodea a las demás divs ~~ */

/* ~~ clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en una <br /> o div vacía como elemento final tras la última div flotante (dentro de #container) si #footer se elimina o se saca fuera de #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>

<!--GaleriaJQ-->
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="js/bjqs-1.3.min.js"></script>
<link rel="stylesheet" href="bjqs.css">

<script>
        jQuery(document).ready(function($) {
          
          $('#banner_fade').bjqs({
            animtype      : 'fade',
            height        : 320,
            width         : 620,
            responsive    : true,
			nexttext : 'NEXT', // Text for 'next' button (can use HTML)
            prevtext : 'PREV', // Text for 'previous' button (can use HTML)
          });
          
        });
      </script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49886984-1', 'milesencias.tk');
  ga('send', 'pageview');

</script>


<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(function(){
		$('#menu li a').click(function(event){
			var elem = $(this).next();
			if(elem.is('ul')){
				event.preventDefault();
				$('#menu ul:visible').not(elem).slideUp();
				elem.slideToggle();
			}
		});
	});
	</script>
    

<link href="../Css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../Css/menu.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="borde"> 
				<div id="contenedor"><!-- InstanceBeginEditable name="Banner" -->                <img src="../Img/banner2.jpg" width="100%" height="220"><!-- InstanceEndEditable -->

					<div id="cabecera">
			    <div id="cabright" align="right">
							<p><strong>Colombia, Cali</strong></p>
					   <p>Sede Principal: Calle 15-13A #71 Barrio Sucre Carrera 12 51 - 49 Villa Colombia</p>
							<p>Carrera 26 #8 - 67 Barrio Alameda</p></div>
				  </div> </br>
		  <div id="cuerpo">
							<div id="menubase">
								<ul id="menu">
<li><a href="../index.html" title="Inicio">Inicio</a>
</li>
<li><a href="../quienesSomos.html" title="Quienes Somos">¿Quienes Somos?</a>
</li>
<li><a href="" title="Productos">Productos</a>
	<ul>
		<li><a href="../lociones.html" title="Lociones">Lociones</a></li>
		<li><a href="../index.html" title="Quimicos">Quimicos</a></li>
	</ul>
</li>
<li><a href="../contactenos.html">Contactenos</a></li></ul>
	
    </div>
		</div>
		  <!-- InstanceBeginEditable name="lateral" --><div id="lateral">
						 		<h1>
						 		  <p class="titulo">Gracias por su consulta.</p></h1>	
<h5></br>                                           												
Su mensaje fue enviado. Pronto nos comunicaremos con usted, de igual forma le recomendamos llamarnos o usar nuestro servicion de chat con alguno de nuestros operarios.</h5>
	  </div><!-- InstanceEndEditable -->

<div id="pie">
  <h3><h4 class="titulo">2014 © Mil esencias, Cali Colombia</h4>
  <!-- InstanceBeginEditable name="Redes" --><script src="http://connect.facebook.net/es_ES/all.js#xfbml=1"></script> 
<fb:like href= "https://www.facebook.com/mrrricerestaurante" show_faces="true" width="400" height="100" font="verdana"></fb:like><a href="https://www.facebook.com"><img src="../Img/face.png" alt="" width="55" height="58" align="right" hspace="3px" vspace="10px" /></a>
              
<a class="fancybox-media" href="http://www.youtube.com"><img src="../Img/youtb.png" alt="" width="55" height="58" align="right" hspace="3px" vspace="10px" /></a> </h3><!-- InstanceEndEditable --> </div>
			  </div> 
    
  </div>
</body>
<!-- InstanceEnd --></html>
