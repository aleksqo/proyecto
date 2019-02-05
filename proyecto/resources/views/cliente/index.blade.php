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
    <div class="banner" id="home1"> <div class="container">
            <h3>productos exclusivos, <span>style is eternal</span></h3>
        </div>
    </div>
<!-- //banner -->

<!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="col-md-5 wthree_banner_bottom_left">
                <div class="video-img">
                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog">
                        <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- pop-up-box -->    
                        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" property="" media="all" />
                        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!--//pop-up-box -->
                    <div id="small-dialog" class="mfp-hide">
                        <iframe src="https://player.vimeo.com/video/127473181" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                    </div>
                    <script>
                        $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });
                                                                                        
                        });
                    </script>
            </div>
            <div class="col-md-7 wthree_banner_bottom_right">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Natura</a></li>
                        <li role="presentation"><a href="#skirts" role="tab" id="skirts-tab" data-toggle="tab" aria-controls="skirts">Esika</a></li>
                        <li role="presentation"><a href="#watches" role="tab" id="watches-tab" data-toggle="tab" aria-controls="watches">Hugo Boss</a></li>
                        <li role="presentation"><a href="#sandals" role="tab" id="sandals-tab" data-toggle="tab" aria-controls="sandals">Kylie</a></li>
                        <li role="presentation"><a href="#jewellery" role="tab" id="jewellery-tab" data-toggle="tab" aria-controls="jewellery">Kits</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                            <div class="agile_ecommerce_tabs">

                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="images/natura1.png" alt=" " class="img-responsive" />
                                        <img src="images/natura2.png" alt=" " class="img-responsive" />
                                        <img src="images/natura3.png" alt=" " class="img-responsive" />
                                        <img src="images/natura4.png" alt=" " class="img-responsive" />
                                        <img src="images/natura1.png" alt=" " class="img-responsive" />
                                        <img src="images/natura2.png" alt=" " class="img-responsive" />
                                        <img src="images/natura3.png" alt=" " class="img-responsive" />
                                        <img src="images/natura4.png" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Natura</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="images/natura2.png" alt=" " class="img-responsive" />
                                        <img src="images/natura2.png" alt=" " class="img-responsive" />
                                        <img src="images/natura3.png" alt=" " class="img-responsive" />
                                        <img src="images/natura4.png" alt=" " class="img-responsive" />
                                        <img src="images/natura1.png" alt=" " class="img-responsive" />
                                        <img src="images/natura2.png" alt=" " class="img-responsive" />
                                        <img src="images/natura3.png" alt=" " class="img-responsive" />
                                        <img src="images/natura4.png" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Natura</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="images/natura3.png" alt=" " class="img-responsive" />
                                        <img src="images/natura2.png" alt=" " class="img-responsive" />
                                        <img src="images/natura3.png" alt=" " class="img-responsive" />
                                        <img src="images/natura4.png" alt=" " class="img-responsive" />
                                        <img src="images/natura1.png" alt=" " class="img-responsive" />
                                        <img src="images/natura2.png" alt=" " class="img-responsive" />
                                        <img src="images/natura3.png" alt=" " class="img-responsive" />
                                        <img src="images/natura4.png" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Natura</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="skirts" aria-labelledby="skirts-tab">
                            <div class="agile_ecommerce_tabs">
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="images/esika1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika4.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika4.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Esika</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                         <img src="images/esika2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika4.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika4.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Esika</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                         <img src="images/esika3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika4.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/esika4.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Esika</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="watches" aria-labelledby="watches-tab">
                            <div class="agile_ecommerce_tabs">
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="images/hugo1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo4.jpg" alt=" " class="img-responsive" />
                                     <img src="images/hugo1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo4.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Boss</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                         <img src="images/hugo2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo4.jpg" alt=" " class="img-responsive" />
                                     <img src="images/hugo1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo4.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Boss</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                       <img src="images/hugo3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo4.jpg" alt=" " class="img-responsive" />
                                     <img src="images/hugo1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/hugo4.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Boss</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                        <div role="tabpanel" class="tab-pane fade" id="sandals" aria-labelledby="sandals-tab">
                            <div class="agile_ecommerce_tabs">
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                   <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Kylie</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                         <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                   <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Kylie</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                         <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                   <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">kylie</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="jewellery" aria-labelledby="jewellery-tab">
                            <div class="agile_ecommerce_tabs">
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                   <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Kylie</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="images/18.jpg" alt=" " class="img-responsive" />
                                        <img src="images/17.jpg" alt=" " class="img-responsive" />
                                        <img src="images/19.jpg" alt=" " class="img-responsive" />
                                        <img src="images/17.jpg" alt=" " class="img-responsive" />
                                        <img src="images/18.jpg" alt=" " class="img-responsive" />
                                        <img src="images/19.jpg" alt=" " class="img-responsive" />
                                        <img src="images/17.jpg" alt=" " class="img-responsive" />
                                        <img src="images/18.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Jewellery</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="images/19.jpg" alt=" " class="img-responsive" />
                                        <img src="images/17.jpg" alt=" " class="img-responsive" />
                                        <img src="images/18.jpg" alt=" " class="img-responsive" />
                                        <img src="images/17.jpg" alt=" " class="img-responsive" />
                                        <img src="images/18.jpg" alt=" " class="img-responsive" />
                                        <img src="images/19.jpg" alt=" " class="img-responsive" />
                                        <img src="images/17.jpg" alt=" " class="img-responsive" />
                                        <img src="images/18.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="#">Jewellery</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a href="/productos">COMPRAR</a></p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!--modal-video-->
                <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                            </div>
                            <section>
                                <div class="modal-body">
                                    <div class="col-md-5 modal_body_left">
                                        <img src="images/natura1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-md-7 modal_body_right">
                                        <h4>Perfumes Natura</h4>
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
                <div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                            </div>
                            <section>
                                <div class="modal-body">
                                    <div class="col-md-5 modal_body_left">
                                        <img src="images/63.jpg" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-md-7 modal_body_right">
                                        <h4>a good look black women's jeans</h4>
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
                                        <img src="images/hugo1.jpg" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-md-7 modal_body_right">
                                        <h4>Hugo Boss</h4>
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
                <div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                            </div>
                            <section>
                                <div class="modal-body">
                                    <div class="col-md-5 modal_body_left">
                                        <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-md-7 modal_body_right">
                                        <h4>Kylie Cosmetics</h4>
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
                <div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                            </div>
                            <section>
                                <div class="modal-body">
                                    <div class="col-md-5 modal_body_left">
                                        <img src="images/35.jpg" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-md-7 modal_body_right">
                                        <h4>a good look women's Jacket</h4>
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
                <div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
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
                                        <h4>Esika</h4>
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
<!-- //banner-bottom -->

<!-- banner-bottom1 -->
    <div class="banner-bottom1">
        <div class="agileinfo_banner_bottom1_grids">
            <div class="col-md-7 agileinfo_banner_bottom1_grid_left">
                <h3>Gran Apertura <span>20% <i>Rebajas</i></span></h3>
                <a href="/productos">Compra Ahora</a>
            </div>
            <div class="col-md-5 agileinfo_banner_bottom1_grid_right">
                <h4>Ofertas por Hora</h4>
                <div class="timer_wrap">
                    <div id="counter"> </div>
                </div>
                <script src="js/jquery.countdown.js"></script>
                <script src="js/script.js"></script>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //banner-bottom1 -->

<!-- special-deals -->
    
<!-- //special-deals -->
<!-- new-products -->
    <div class="new-products">
        <div class="container">
            <h3>Nuevos Productos</h3>
            <div class="agileinfo_new_products_grids">
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                   <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Skirts</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$320</span> <i class="item_price">$250</i></p>
                            <p><a class="item_add" href="/productos">COMPRAR</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                        <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                   <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Jackets</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$320</span> <i class="item_price">$250</i></p>
                            <p><a class="item_add" href="/productos">COMPRAR</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                           <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                   <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Dresses</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$320</span> <i class="item_price">$250</i></p>
                            <p><a class="item_add" href="/productos">COMPRAR</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                          <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                                   <img src="images/kyle1.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle2.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle3.jpg" alt=" " class="img-responsive" />
                                        <img src="images/kyle4.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Jeans</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$320</span> <i class="item_price">$250</i></p>
                            <p><a class="item_add" href="/productos">COMPRAR</a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //new-products -->
<!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Top Marcas</h3>
            <div class="sliderfig">
                <ul id="flexiselDemo1">         
                    <li>
                        <img src="images/naturalogo2.jpg" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/esikalogo.png" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/hugobosslogo.png" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/kylelogo.jpg" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/cyzonelogo.png" alt=" " class="img-responsive" />
                    </li>
                </ul>
            </div>
                    <script type="text/javascript">
                            $(window).load(function() {
                                $("#flexiselDemo1").flexisel({
                                    visibleItems: 4,
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
<!-- //top-brands -->
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