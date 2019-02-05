<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Perfumería y Cosmética | Belleza</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- countdown -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //countdown -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
</head>
    
<body>
<!-- header -->

   <div class="header">
        <div class="container">
                  @if(Auth::guest('web'))
          <div class="w3l_login">
                <a href="/login" data-toggle="#" data-target="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            </div>
            @else
               <div class="w3l_login">
                <a href="/login" data-toggle="#" data-target="#"><span class="glyphicon glyphicon-user" aria-hidden="true"> {{Auth::user()->name}} </span></a>
               
                
            </div>
            <div class="w3l_login">
                <a  href="#" class="btn btn-link">Perfil</a>
            </div>
             <div class="w3l_login">
                <a  href="logout" class="btn btn-link">Salir</a>
            </div>

            @endif

            <div class="w3l_logo">
                <h1><a href="/">__****Belleza****__<span>Perfumería y Cosmética</span></a></h1>
            </div>
          
            <div class="cart box_1">
                <a href="{{ route('cliente.pago')}}">
                    <div class="total">
                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                    <img src="images/bag.png" alt="" />
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                <div class="clearfix"> </div>
            </div>  
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/" class="act">Home</a></li>   
                        <!-- Mega Menu -->
                        <li><a href="/productos">Productos</a></li>
                        <li><a href="/nosotros">Nosotros</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contactos">Contactanos</a></li>
                    </ul>
                </div>
                
            </nav>
        </div>
    </div>
<!-- //header -->
<!-- banner -->
    <div class="banner10" id="home1">
        <div class="container">
            <h2>Contactanos</h2>
        </div>
    </div>
<!-- //banner -->

<!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Contactanos</li>
            </ul>
        </div>
    </div>
<!-- //breadcrumbs -->

<!-- mail -->
    <div class="mail">
        <div class="container">
            <h3>Contactanos</h3>
            <div class="agile_mail_grids">
                <div class="col-md-5 contact-left">
                    <h4>Direccion</h4>
                    <p>est eligendi optio cumque nihil impedit quo minus id quod maxime
                        <span>26 56D Rescue,US</span></p>
                    <ul>
                        <li>Free Phone :+1 078 4589 2456</li>
                        <li>Telephone :+1 078 4589 2456</li>
                        <li>Fax :+1 078 4589 2456</li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="col-md-7 contact-left">
                    <h4>Envianos tus datos</h4>
                    <form action="#" method="post">
                        <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                        <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                        <textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                        <input type="submit" value="Enviar" >
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="contact-bottom">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d96908.54934770924!2d-73.74913540000001!3d40.62123259999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sanimal+rescue+service+near+Inwood%2C+New+York%2C+NY%2C+United+States!5e0!3m2!1sen!2sin!4v1436335928062" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<!-- //mail -->
<!-- newsletter -->
  <div class="newsletter">
        <div class="container">
            <div class="col-md-6 w3agile_newsletter_left">
                <h3>Noticias y Promociones</h3>
                <p>Dejanos tu correo electronico para las ultimas ofertas.</p>
            </div>
            <div class="col-md-6 w3agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="submit" value="" />
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //newsletter -->
<!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <h3>Contact</h3>
                    <p>Encuentranos en la ciudad de huancayo</p>
                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Paseo La Breña #1358 <span>Huancayo</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">gonzalo@belleza.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Information</h3>
                    <ul class="info"> 
                        <li><a href="/nosotros">Nosotros</a></li>
                        <li><a href="/contactos">Contactanos</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="/productos">Products</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Category</h3>
                    <ul class="info"> 
                        <li><a href="#">Dresses</a></li>
                        <li><a href="#">Sweaters</a></li>
                        <li><a href="#">Shirts</a></li>
                        <li><a href="#">Sarees</a></li>
                        <li><a href="#">Shorts & Skirts</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Perfil</h3>
                    <ul class="info"> 
                        <li><a href="/productos">Tienda</a></li>
                        <li><a href="{{ route('cliente.pago')}}">Carrito</a></li>
                    </ul>
                    <h4>Siguenos</h4>
                    <div class="agileits_social_button">
                        <ul>
                            <li><a href="#" class="facebook"> </a></li>
                            <li><a href="#" class="twitter"> </a></li>
                            <li><a href="#" class="google"> </a></li>
                            <li><a href="#" class="pinterest"> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="footer-copy1">
                <div class="footer-copy-pos">
                    <a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
                </div>
            </div>
            <div class="container">
                <p>&copy; 2018 Belleza. All rights reserved | Design by <a href="https://www.facebook.com/zlDarkLexHs">AleksQo</a></p>
            </div>
        </div>
    </div>
<!-- //footer -->
</body>
</html>