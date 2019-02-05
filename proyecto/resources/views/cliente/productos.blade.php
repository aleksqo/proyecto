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
    <div class="banner8" id="home1">
        <div class="container">
            <h2>Cosméticos Mujer<span>Hasta</span> 15% <i> Descuento</i></h2>
        </div>
    </div>
<!-- //banner -->

<!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Productos</li>
            </ul>
        </div>
    </div>
<!-- //breadcrumbs -->

<!-- dresses -->
    <div class="dresses">
        <div class="container">
            <div class="w3ls_dresses_grids">
                <div class="col-md-4 w3ls_dresses_grid_left">
                    <div class="w3ls_dresses_grid_left_grid">
                        <h3>Categories</h3>
                        <div class="w3ls_dresses_grid_left_grid_sub">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                  <h4 class="panel-title asd">
                                    <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>New Arrivals
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body panel_text">
                                    <ul>
                                        <li><a href="dresses.html">Dresses</a></li>
                                        <li><a href="sweaters.html">Sweaters</a></li>
                                        <li><a href="skirts.html">Shorts & Skirts</a></li>
                                        <li><a href="jeans.html">Jeans</a></li>
                                        <li><a href="shirts.html">Shirts</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Foot Wear
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                   <div class="panel-body panel_text">
                                    <ul>
                                        <li><a href="sandals.html">Flats</a></li>
                                        <li><a href="sandals.html">Sandals</a></li>
                                        <li><a href="sandals.html">Boots</a></li>
                                        <li><a href="sandals.html">Heals</a></li>
                                        <li><a href="sandals.html">Shirts</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <ul class="panel_bottom">
                                <li><a href="products.html">Summer Store</a></li>
                                <li><a href="dresses.html">New In Clothing</a></li>
                                <li><a href="sandals.html">New In Shoes</a></li>
                                <li><a href="products.html">Latest Watches</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w3ls_dresses_grid_left_grid">
                        <h3>Color</h3>
                        <div class="w3ls_dresses_grid_left_grid_sub">
                            <div class="ecommerce_color">
                                <ul>
                                    <li><a href="#"><i></i> Red(5)</a></li>
                                    <li><a href="#"><i></i> Brown(2)</a></li>
                                    <li><a href="#"><i></i> Yellow(3)</a></li>
                                    <li><a href="#"><i></i> Violet(6)</a></li>
                                    <li><a href="#"><i></i> Orange(2)</a></li>
                                    <li><a href="#"><i></i> Blue(1)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w3ls_dresses_grid_left_grid">
                        <h3>Size</h3>
                        <div class="w3ls_dresses_grid_left_grid_sub">
                            <div class="ecommerce_color ecommerce_size">
                                <ul>
                                    <li><a href="#">Medium</a></li>
                                    <li><a href="#">Large</a></li>
                                    <li><a href="#">Extra Large</a></li>
                                    <li><a href="#">Small</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 w3ls_dresses_grid_right">
                    <div class="col-md-6 w3ls_dresses_grid_right_left">
                        <div class="w3ls_dresses_grid_right_grid1">
                            <img src="images/72.jpg" alt=" " class="img-responsive" />
                            <div class="w3ls_dresses_grid_right_grid1_pos1">
                                <h3>Cosmeticos <span>Hasta </span> 10% Descuento</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3ls_dresses_grid_right_left">
                        <div class="w3ls_dresses_grid_right_grid1">
                            <img src="images/73.jpg" alt=" " class="img-responsive" />
                            <div class="w3ls_dresses_grid_right_grid1_pos">
                                <h3>Cosmeticos <span>Maquillaje</span>Cepillo</h3>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>

                    <div class="w3ls_dresses_grid_right_grid2">
                        <div class="w3ls_dresses_grid_right_grid2_left">
                            <h3>Productos:</h3>
                        </div>
                      
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3ls_dresses_grid_right_grid3">
             @foreach($productos as $producto)
                            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
                            <div class="agile_ecommerce_tab_left dresses_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ $producto->imagen }}" alt=" " class="img-responsive" />
                                    <img src="{{ $producto->imagen }}" alt=" " class="img-responsive" />
                                    <img src="{{ $producto->imagen }}" alt=" " class="img-responsive" />
                                    <img src="{{ $producto->imagen }}" alt=" " class="img-responsive" />
                                    <img src="{{ $producto->imagen }}" alt=" " class="img-responsive" />
                                    <img src="{{ $producto->imagen }}" alt=" " class="img-responsive" />
                                    <img src="{{ $producto->imagen }}" alt=" " class="img-responsive" />
                                    <img src="{{ $producto->imagen }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="/detalles">{{ $producto->nombre}}</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span>S/.342</span> <i class="item_price">S/.{{$producto->precio}}</i></p>
                                    <p><a class="item_add" href="{{ route('producto.addToCart',['id'=>$producto->id])}}">Add to cart</a></p>
                                </div>
                                <div class="dresses_grid_pos">
                                    <h6>New</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                  

                        
                    <div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                                </div>
                                <section>
                                    <div class="modal-body">
                                        <div class="col-md-5 modal_body_left">
                                            <img src="images/39.jpg" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="col-md-7 modal_body_right">
                                            <h4>a good look women's Long Skirt</h4>
                                            <p>Ut enim ad minim veniam, quis nostrud 
                                                exercitation ullamco laboris nisi ut aliquip ex ea 
                                                commodo consequat.Duis aute irure dolor in 
                                                reprehenderit in voluptate velit esse cillum dolore 
                                                eu fugiat nulla pariatur. Excepteur sint occaecat 
                                                cupidatat non proident, sunt in culpa qui officia 
                                                deserunt mollit anim id est laborum.</p>
                                            <div class="rating">
                                                <div class="rating-left">
                                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="rating-left">
                                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="rating-left">
                                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="rating-left">
                                                    <img src="images/star.png" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="rating-left">
                                                    <img src="images/star.png" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                                <p><span>$320</span> <i class="item_price">$250</i></p>
                                                <p><a class="item_add" href="#">Add to cart</a></p>
                                            </div>
                                            <h5>Color</h5>
                                            <div class="color-quality">
                                                <ul>
                                                    <li><a href="#"><span></span>Red</a></li>
                                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModal9">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                </div>
                <section>
                    <div class="modal-body">

                        <div class="col-md-5 modal_body_left">
                            <img src="images/esika1.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>For Skin Care</h4>
                            <p>Ut enim ad minim veniam, quis nostrud 
                                exercitation ullamco laboris nisi ut aliquip ex ea 
                                commodo consequat.Duis aute irure dolor in 
                                reprehenderit in voluptate velit esse cillum dolore 
                                eu fugiat nulla pariatur. Excepteur sint occaecat 
                                cupidatat non proident, sunt in culpa qui officia 
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$320</span> <i class="item_price">$250</i></p>
                                <p><a class="item_add" href="#">Add to cart</a></p>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/23.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>a good look women's Watch</h4>
                            <p>Ut enim ad minim veniam, quis nostrud 
                                exercitation ullamco laboris nisi ut aliquip ex ea 
                                commodo consequat.Duis aute irure dolor in 
                                reprehenderit in voluptate velit esse cillum dolore 
                                eu fugiat nulla pariatur. Excepteur sint occaecat 
                                cupidatat non proident, sunt in culpa qui officia 
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$320</span> <i class="item_price">$250</i></p>
                                <p><a class="item_add" href="#">Add to cart</a></p>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/22.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>a good look women's Necklace</h4>
                            <p>Ut enim ad minim veniam, quis nostrud 
                                exercitation ullamco laboris nisi ut aliquip ex ea 
                                commodo consequat.Duis aute irure dolor in 
                                reprehenderit in voluptate velit esse cillum dolore 
                                eu fugiat nulla pariatur. Excepteur sint occaecat 
                                cupidatat non proident, sunt in culpa qui officia 
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$320</span> <i class="item_price">$250</i></p>
                                <p><a class="item_add" href="#">Add to cart</a></p>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="w3l_related_products">
        <div class="container">
            <h3>Productos Relacionados</h3>
            <ul id="flexiselDemo2">         
                <li>
                    <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left dresses_grid">
                            <div class="hs-wrapper hs-wrapper3">
                                <img src="images/esika1.jpg" alt=" " class="img-responsive" />
                                <img src="images/esika2.jpg" alt=" " class="img-responsive" />
                                <img src="images/esika3.jpg" alt=" " class="img-responsive" />
                                <img src="images/esika4.jpg" alt=" " class="img-responsive" />
                                 <img src="images/esika1.jpg" alt=" " class="img-responsive" />
                                <img src="images/esika2.jpg" alt=" " class="img-responsive" />
                                <img src="images/esika3.jpg" alt=" " class="img-responsive" />
                                <img src="images/esika4.jpg" alt=" " class="img-responsive" />
                                <div class="w3_hs_bottom">
                                    <div class="flex_ecommerce">
                                        <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                            <h5><a href="single.html">Long Purple Skirts</a></h5>
                            <div class="simpleCart_shelfItem">
                                <p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
                                <p><a class="item_add" href="#">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left dresses_grid">
                            <div class="hs-wrapper hs-wrapper3">
                                <img src="images/natura1.png" alt=" " class="img-responsive" />
                                <img src="images/natura2.png" alt=" " class="img-responsive" />
                                <img src="images/natura3.png" alt=" " class="img-responsive" />
                                <img src="images/natura4.png" alt=" " class="img-responsive" />
                               <img src="images/natura1.png" alt=" " class="img-responsive" />
                                <img src="images/natura2.png" alt=" " class="img-responsive" />
                                <img src="images/natura3.png" alt=" " class="img-responsive" />
                                <img src="images/natura4.png" alt=" " class="img-responsive" />
                                <div class="w3_hs_bottom">
                                    <div class="flex_ecommerce">
                                        <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                            <h5><a href="single.html">Black Shorts</a></h5>
                            <div class="simpleCart_shelfItem">
                                <p class="flexisel_ecommerce_cart"><span>$432</span> <i class="item_price">$323</i></p>
                                <p><a class="item_add" href="#">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left dresses_grid">
                            <div class="hs-wrapper hs-wrapper3">
                                <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                <div class="w3_hs_bottom">
                                    <div class="flex_ecommerce">
                                        <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                            <h5><a href="single.html">White Skirts</a></h5>
                            <div class="simpleCart_shelfItem">
                                <p class="flexisel_ecommerce_cart"><span>$323</span> <i class="item_price">$310</i></p>
                                <p><a class="item_add" href="#">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left dresses_grid">
                            <div class="hs-wrapper hs-wrapper3">
                                <img src="images/hugo1.jpg" alt=" " class="img-responsive" />
                                <img src="images/hugo2.jpg" alt=" " class="img-responsive" />
                                <img src="images/hugo3.jpg" alt=" " class="img-responsive" />
                                <img src="images/hugo4.jpg" alt=" " class="img-responsive" />
                                  <img src="images/hugo1.jpg" alt=" " class="img-responsive" />
                                <img src="images/hugo2.jpg" alt=" " class="img-responsive" />
                                <img src="images/hugo3.jpg" alt=" " class="img-responsive" />
                                <img src="images/hugo4.jpg" alt=" " class="img-responsive" />
                                <div class="w3_hs_bottom">
                                    <div class="flex_ecommerce">
                                        <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                            <h5><a href="single.html">Long Skirts</a></h5>
                            <div class="simpleCart_shelfItem">
                                <p class="flexisel_ecommerce_cart"><span>$256</span> <i class="item_price">$200</i></p>
                                <p><a class="item_add" href="#">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
                <script type="text/javascript">
                    $(window).load(function() {
                        $("#flexiselDemo2").flexisel({
                            visibleItems:4,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,            
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: { 
                                portrait: { 
                                    changePoint:480,
                                    visibleItems: 1
                                }, 
                                landscape: { 
                                    changePoint:640,
                                    visibleItems:2
                                },
                                tablet: { 
                                    changePoint:768,
                                    visibleItems: 3
                                }
                            }
                        });
                        
                    });
                </script>
                <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        </div>
    </div>
<!-- //dresses -->
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