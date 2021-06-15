<?php header('Content-Type: text/html; charset=ISO-8859-1'); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8" />
        <title>NS MANIOBRAS</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />
        
     <link rel="shortcut icon" href="images/icono11.ico" />
     
     
     <meta name="description" content="NS MANIOBRAS, es una empresa con amplia trayectoria, especializada en brindar servicios de alquiler, reparaci�n y mantenimiento de Montacargas. Con experiencia en maniobras y asesoramiento para movimientos de maquinarias en zonas reducidas e inaccesibles."/>


<meta name="keywords" content="NS Maniobras,Alquiler de Montacargas,Reparación y Mantenimiento Montacargas,venta de montacargas y repuestos,asesor�a de compra de montacargas y repuestos."/>


<meta name="author" content="DMCREATIVE" /> 

<meta name="robots" content="All" /> 

<meta name="googlebot" content="index, follow" /> 

<meta http-equiv="Pragma" content="no-cache"> 

<meta name="Revisit" CONTENT="5 day">

<meta name="distribution" content="global" />


<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1" />






<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "995415893908035", // Facebook page ID
            whatsapp: "+51974636332", // WhatsApp number
            call_to_action: "Consulta aqu\u00cd", // Call to action
            button_color: "#000000", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->





     

<link rel='stylesheet' href='formulario/estilos.css'>

<script src='formulario/jquery.min.js'></script>
<script src='formulario/funciones.js'></script>      
<?php
    if(isset($_POST['boton'])){
        if($_POST['nombre'] == ''){
            $errors[1] = '<span class="error">Ingrese su nombre</span>';
        }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = '<span class="error">Ingrese un email correcto</span>';
        }else if($_POST['asunto'] == ''){
            $errors[3] = '<span class="error">Ingrese un asunto</span>';
			
			
			
        }else if($_POST['mensaje'] == ''){
            $errors[4] = '<span class="error">Ingrese un mensaje</span>';
        }else{
            $dest = "ventas@nsmaniobras.com,noessantos@gmail.com"; //Email de destino
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
			
            $asunto = $_POST['asunto']; //Asunto
            $cuerpo = "<b>Nombre :</b> ".$_POST["nombre"].

" <br /> <b>Email :</b> ".$_POST["email"].

" <br /> <b>Comentario :</b> ".$_POST["mensaje"]; //Cuerpo del mensaje
            //Cabeceras del correo
            $headers = "From: $nombre <$email>\r\n"; //Quien envia?
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
 
            if(mail($dest,$asunto,$cuerpo,$headers)){
                $result = '<div class="result_ok">Email enviado correctamente </div>';
                // si el envio fue exitoso reseteamos lo que el usuario escribio:
                $_POST['nombre'] = '';
                $_POST['email'] = '';
                $_POST['asunto'] = '';
                $_POST['mensaje'] = '';
            }else{
                $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
            }
        }
    }
?> 





        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
        
        
         <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
        

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-199563953-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-199563953-1');
</script>        
    </head>
    
    <body>

        <div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            <img src="images/phone.png" alt="phone"/>
                             &nbsp;&nbsp; <a href="tel:+51974636332" style="color:#fff;">974 636 332</a>  
                    </div>
                    <div id="email" class="pull-right">
                            <img src="images/email.png" alt="email"/>
<a href="mailto:ventas@nsmaniobras.com" style="color:#ffffff;">ventas@nsmaniobras.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-top-menu">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand"><img src="images/templatemo_logo.png" alt="Urbanic free HTML5 template" title="Urbanic HTML5 Template" /></a>
                        </div>
                        
                        
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="#templatemo-top">INICIO</a></li>
                                
                       <li><a href="#nosotros">NOSOTROS</a></li>         
                                <li><a href="#servicios">SERVICIOS</a></li>
                                <li><a href="#templatemo-portfolio">GALER&Iacute;A</a></li>
                                
                                
                                <li><a href="#templatemo-contact">CONTACTOS</a></li>
                            </ul>
                            
                          
                            
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
        
        
        
        
        
        
        <div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/banner2.png" alt="banner2" title="banner2" id="wows1_0"/></li>
		<li><img src="data1/images/banner1.png" alt="banner1" title="banner1" id="wows1_1"/></li>
	</ul></div>

	</div>
    
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>






        <div class="templatemo-welcome" id="nosotros">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">BIENVENIDOS A: </span><span class="" style="color:#F90"><b>NS MANIOBRAS</b></span>
                    <p class="txt_slogan"><i>VENTA, ALQUILER Y MANTENIMIENTO DE EQUIPS DE IZAJE.</i></p>
                </div>	
            </div>
       
        
        <div class="templatemo-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="images/leaf.png" alt="icon" />
                                <span class="templatemo-service-item-header">EMPRESA</span>
                            </div>
<p><b>NS MANIOBRAS</b> es una empresa con amplia trayectoria, especializada en brindar servicios de alquiler, reparaci&oacute;n y mantenimiento de Montacargas. Con experiencia en maniobras y asesoramiento para movimientos de maquinarias en zonas reducidas e inaccesibles.</p>
                            <div class="text-center">
                            	
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item" >
                            <div>
                                <img src="images/mobile.png" alt="icon"/>
                                <span class="templatemo-service-item-header">MISI&Oacute;N</span>
                            </div>
							<p>La misi&oacute;n de NS MANIOBRAS, es brindar un servicio de calidad, con esfuerzo y m&aacute;ximo compromiso para nuestros clientes, con soluciones eficaces, f&aacute;ciles, seguras y r&aacute;pidas con el mejor costo beneficio.</p>
                            <div class="text-center">
                                
                            </div>
                            <br class="clearfix"/>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="images/battery.png" alt="icon"/>
                                <span class="templatemo-service-item-header">VISI&Oacute;N</span>
                            </div>
                            <p>La visi&oacute;n de NS MANIOBRAS, es ser reconocidos como la opci&oacute;n m&aacute;s confiable y de mayor valor agregado para los usuarios de equipos y servicios en nuestro mercado. 
Mantener una participaci&oacute;n superior en los servicios que brindemos, con productos modernos y de alta rentabilidad.

</p>
                            <div class="text-center">
                                
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <br class="clearfix"/>
                    </div>
                </div>
            </div>
        </div>

        
         </div>
        
        
        
        
        
      <div id="servicios" style="background:#dedede; padding-bottom:40px;">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 60px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey">NUESTROS SERVICIOS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <br class="clearfix"/>
                </div>
                
                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <a href="#">
                                    <img class="img-responsive" src="images/blog-image-1.jpg" alt="gallery 1" />
                                </a>
                            </li>
                            <li  class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">Alquiler </span><br/>
                                    
                               
                                <div class="clearfix"> </div>
                                <p class="blog_text">Ofrecemos el servicio de alquiler de montacargas, contando con equipos modernos y en perfecto estado. El servicio puede ser de m&aacute;quina seca o con operador y combustible.
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 1 -->
                    
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4"><a href="#">
                                <img class="img-responsive" src="images/blog-image-2.jpg" alt="gallery 2" /></a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">Servicio T&eacute;cnico  </span><br/>
                                    
                                
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                        Ofrecemos el servicio de mantenimiento correctivo, que consiste en la reparaci&oacute;n del equipo. As&iacute; como el servicio de mantenimiento preventivo, que cumpliendo con un cronograma  de horas de trabajo, se pueda alargar la vida &uacute;til del equipo.
                                </p>
                            </li>
                        </ul>	
                    </div><!-- /.blog_post 2 -->
                    
                    <div class="templatemo_clear"></div>
                    
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4"><a href="#">
                                <img class="img-responsive" src="images/blog-image-3.jpg" alt="gallery 3" /></a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header"> Venta </span><br/>
                               
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                       Ofrecemos el servicio de venta y asesor&iacute;a de compra de montacargas y repuestos.
                                </p>
                            </li>
                        </ul>	
                    </div><!-- /.blog_post 3 -->
                    
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <a href="#">
                                <img class="img-responsive" src="images/blog-image-4.jpg" alt="gallery 3" />
                                    
                                </a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    
                                  <span class="blog_header">Certificaci&oacute;n </span><br/>  
                                
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                     Ofrecemos el servicio de certificaci&oacute;n de montacargas y operadores. 
                                </p>
                               
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 4 -->
                    
                </div>
            </div>
        </div>  
        
        
        
        
        
        
        
        
        
        
        <br><br>
        
        
        
        
        <!-- /.templatemo-team -->

        <div id="templatemo-portfolio" >
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">NUESTRA GALER&Iacute;A</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="templatemo-gallery-category" style="font-size:16px; margin-top:20px;">
                        
                    </div>
                </div> <!-- /.row -->


                <div class="clearfix"></div>
                <div class="text-center">
                    <ul class="templatemo-project-gallery" >
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-graphic" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-1.jpg" data-group="gallery-graphic">
                                <div class="templatemo-project-box">

                                    <img src="images/galeria/gallery-image-1.jpg" class="img-responsive" alt="gallery" />

                                    <div class="project-overlay">
                                        <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-creative" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-2.jpg" data-group="gallery-creative">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-2.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                         <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-3.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-3.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-design" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-4.jpg" data-group="gallery-design">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-4.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                         <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-5.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-5.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                         <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-6.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-6.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                         <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-design" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-7.jpg" data-group="gallery-design">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-7.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                         <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-creative" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-8.jpg" data-group="gallery-creative">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-8.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                         <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-graphic" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-9.jpg" data-group="gallery-graphic">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-9.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                         <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-inspiration" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-10.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-10.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                         <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-3 col-md-2 col-sm-2">
                        </li>
                        
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-inspiration" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-11.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-11.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                         <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        
                         <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-inspiration" >
                            <a class="colorbox" href="images/galeria/full-gallery-image-12.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/galeria/gallery-image-12.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                         <h5>NS</h5>
                                        <hr />
                                        <h4> MANIOBRAS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul><!-- /.gallery -->
                </div>
                <div class="clearfix"></div>
                <div class="row text-center" style="margin:0px 0px 30px 0px;">
                    
                </div>
            </div><!-- /.container -->
        </div> <!-- /.templatemo-portfolio -->

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        <div id="templatemo-contact" style="background:#e4e4e4; padding-bottom:40px; padding-top:30px;">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/>
                            <span class="txt_darkgrey">NUESTRO CONTACTO</span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>



                    <div class="col-md-7">
                        <div> 
                         
                        
                   
                   
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1949.111467520424!2d-76.84915722807278!3d-12.30076829846177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6479e4f71e5%3A0x12d30cfd23c7a7c3!2sNS%20MANIOBRAS!5e0!3m2!1ses!2spe!4v1616450989667!5m2!1ses!2spe" width="90%" height="490" style="border: solid 3px #FFF; margin-bottom:20px; margin-right:20px;" allowfullscreen="" loading="lazy"></iframe>    
                         
                         
                         </div>  
                        <div class="clearfix"></div>
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    <div class="col-md-5 contact_right">
                        <p style="font-size:15px; font-weight:400;">Si desea realizar una consulta, por favor llene el formulario y enviar un correo electr&oacute;nico indicando fecha, hora y persona de contacto. </p>
                        
<p style="font-size:15px; font-weight:400;"><img src="images/location.png" alt="icon 1" /> Car. Panamericana Sur km. 40 MZ. 24 Lt. 7A - Lurin</p>
                        
<p style="font-size:15px; font-weight:400;"><img src="images/phone1.png"  alt="icon 2" /> 974 636 332</p>
                        
                        
 <p><img src="images/globe.png" alt="icon 3" /><a class="link_orange" href="mailto:ventas@nsmaniobras.com"><span class="txt_orange"> ventas@nsmaniobras.com
</span></a></p>

 <p><img src="images/globe.png" alt="icon 3" /><a class="link_orange" href="mailto:nsantos@nsmaniobras.com"><span class="txt_orange"> nsantos@nsmaniobras.com
</span></a></p>

 









                        <form method='POST' class="form-horizontal" action='#templatemo-contact'>
<div class="form-group">
								<label></label>
								<input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre" value='<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; } ?>'>
                                
                                <?php if(isset($errors)){ echo $errors[1]; } ?>
</div>
                            
                            
<div class="form-group">
								<label></label>
								<input type="text" name=" email" class="form-control" value='<?php if(isset($_POST['email'])){ $_POST['email']; } ?>' placeholder="Email">
                                <?php if(isset($errors)){ echo $errors[2]; } ?>
</div>
                            
                            
                            
                            
<div class="form-group">
								<label></label>
								<input type="text" name="asunto" class="form-control" value='<?php if(isset($_POST['asunto'])){ $_POST['asunto']; } ?>' placeholder="Asunto">
                                <?php if(isset($errors)){ echo $errors[3]; } ?>
</div>
                            
                            
                            
<div class="form-group">
								<label></label>
								<textarea name="mensaje" class="form-control" style="height: 130px;" placeholder="Mensaje"><?php if(isset($_POST['mensaje'])){ $_POST['mensaje']; } ?><?php if(isset($errors)){ echo $errors[4]; } ?></textarea>
</div>
                            
                            
                            
                            
                            
<div class="clearfix"> 
							<input type="submit" value="ENVIAR" name="boton" class="btn btn-orange pull-right"/>
                            
</div>                            
						</form>
                        	
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /#templatemo-contact -->


        <div class="templatemo-tweets">
            <div class="container">
                <div class="row" style="margin-top:20px;">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-1">
                                <img src="images/quote.png" alt="icon" style="margin:30px 0px 0px 0px;"  />
                        </div>
                        <div class="col-md-9 tweet_txt" >
                        <div style="margin:30px 0px 0px 0px;">
                                <span><b>"PORQUE LA PRODUCCI&Oacute;N NO DEBE DETENERSE"</b></span></div>
                                <br/>
                                
                        </div>
                       
                 </div><!-- /.row -->
            </div><!-- /.container -->
        </div>

        
        
        
        
        
        


        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
         <li>
<a href="https://www.facebook.com/Montacargas-Ns-Maniobras-995415893908035/?fref=ts" target="_blank">
<span class="social-icon-fb"></span>
                                    </a>
                                </li>
                                
                                  <li>
<a href="https://es.linkedin.com/company/ns-maniobras-sac" target="_blank">
<span class="social-icon-rss"></span>
                                    </a>
                                </li>
                                
                               
                            </ul>
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Subir</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                        	Todo los derechos reservados &copy; 2017
                             <a href="#" style="color:#f0b503;">NS MANIOBRAS </a> 
                        	- Dise&ntilde;ado por: <a href="http://dmcreative-web.com/" target="_blank" style="color:#f0b503;">DMCREATIVE </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>

    </body>
</html>