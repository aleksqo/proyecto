<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Perfumeria y Cosmetica | Belleza</title>

<script src="https://checkout.culqi.com/js/v3"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
                   @foreach($productos as $producto)
                <p><a href="{{ route('producto.remove',['id'=> $producto['item']['id']]) }}" class="simpleCart_empty"> Empty Cart</a></p>
                @endforeach
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
            <h2>Carrito de Compras</h2>
        </div>
    </div>
<!-- //banner -->

<!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Carrito de Compras</li>
            </ul>
        </div>
    </div>
<!-- //breadcrumbs -->

<!-- checkout -->

@if(session::has('cart'))
    <div class="checkout">
        <div class="container">
            <h3>Tu Carrito de compras contiene: <span> </span></h3>

         
  
            <div class="checkout-right">
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Nombre Producto</th>
                            <th>Cargos de envio</th>
                            <th>Precio</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    @foreach($productos as $producto)
                    <tr class="rem1">
                        
                        <td class="invert-image">
                            <img src="{{ $producto['item']['imagen']}}" width="15%" alt="" class="img-responsive" /></a></td>
                        <td class="invert">
                             <div class="quantity"> 
                                <a href="{{ route('producto.aumentarByOne',['id'=> $producto['item']['id']]) }}"> +1 </a>
                                    <div class="entry value"><span></span>{{ $producto['qty']}}</div>
                                <a href="{{ route('producto.reduceByOne',['id'=> $producto['item']['id']]) }}"> -1 </a>
                                </div>
                            </div>
                        </td>
                        <td class="invert">{{ $producto['item']['nombre']}}</td>
                        <td class="invert">S/.0.00</td>
                        <td class="invert">S/.{{ $producto['precio']}}</td>
                        <td>
                            <a href="{{ route('producto.remove',['id'=> $producto['item']['id']]) }}"> X </a>
                          
                          
                        </td>
                    </tr>
                                         
            
             @endforeach 
                 </table>
            </div>
        
            <div class="checkout-left"> 
                <div class="checkout-left-basket">
                    <h4>Continue to basket</h4>
                    <ul>
                       
                        <li>Total <i>:</i> <span>S/.{{ $totalPrice }}.00</span></li>
                        <button type="button" id="comprar" class="btn btn-warning">PROCESAR COMPRA</button>
                    </ul>
                         
                    
             
                    <div class="row">
                      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                  
                    </div>
                    </div>
                </div>
                <div class="checkout-right-basket">
                    <a href="productos"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Comprando</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

 
   @else

    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h2> No Hay Productos en el Carrito</h2>
        </div>
    </div>

   @endif 
                
 
    
<!-- //checkout -->
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

@foreach($productos as $producto)
<script>
    Culqi.publicKey = 'pk_test_EFrrOM1WcTIzNhsg';

var producto="{{ $producto['item']['nombre']}}";
var precio="{{ $totalPrice }}";

    Culqi.settings({
        title: 'Culqi Store',
        currency: 'PEN',
        description: producto,
        amount: precio,
    });

    $('#comprar').on('click', function(e) {
            // Abre el formulario con las opciones de Culqi.settings
            Culqi.open();
            e.preventDefault();
});
    function culqi() {


      if(Culqi.token) {
          var token = Culqi.token.id;
          var email = Culqi.token.email;

          


        $.ajax({
          method: "POST",
          type: 'post',
          url: "/pagos/procesar_pago",
          dataType: 'json',
          data: { 
            token: token, 
                monto : $("#txtMontoTotal").html()*100,
                description: 'Productos del Hogar',
                email : email
            },
          success: function (data) { 

                if(data.state)
                {
                    window.location.href="/pagos/compraexitosa";
                }   
            },

          error: function (request, status, error) {
            console.log(error)
         }
        });



        

      }else{ 
          console.log(Culqi.error);
      }

  };

  
</script>
@endforeach

</body>
</html>