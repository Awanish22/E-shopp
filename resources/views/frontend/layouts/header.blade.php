
<?php

use\App\Http\Controllers\frontend\CartController;
$total=0;
if(Session::has('user'))
{
  $total= CartController::cartItem();
}


?>


<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->


<!-- Mirrored from demo.enpek.com/html-templates/stroller/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Jul 2021 09:29:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <!--=================== Favicon ===================-->
    <link rel="shortcut icon" href="{{url('frontend/assets/favicon.png')}}" type="image/png" />

    <!--=================== Description ===================-->
    <meta name="description" content="">

    <!--=================== Title ===================-->
    <title>shop</title>
    <!--=================== Helpers ===================-->
    {{-- <link rel="canonical" href="index.html"> --}}

    <!--=================== Bootstrap Core CSS ===================-->
    <link href="{{url('frontend/assets/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />

    <!--=================== Paira Framework Main CSS ===================-->
    <link href="{{url('frontend/assets/paira.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--=================== Paira Framework Color and Font Settings CSS ===================-->
    <link href="{{url('frontend/assets/paira-typography.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--=================== Paira Framework Main Responsive CSS ===================-->
    <link href="{{url('frontend/assets/paira-responsive.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--=================== Font Awesome ===================-->
    <link href="{{url('frontend/assets/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />

    <!--=================== Jquery Include ===================-->
    <script src="{{url('frontend/assets/jquery-1.11.2.min.js')}}" type="text/javascript"></script>
    <script src="{{url('frontend/assets/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

    <!--=================== Google Fonts ===================-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300">

    <!--=================== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ===================-->
    <!--[if lt IE 9]>
    <script src="assets/html5shiv.min.js" type="text/javascript"></script>
    <script src="assets/respond.min.js" type="text/javascript"></script>
    <![endif]-->
    <style>
body {
  
  font-family: cursive;
}

        .glow {
          font-size: 50px;
          color: #fff;
          text-align: center;
          animation: glow 1s ease-in-out infinite alternate;
        }
        
        @-webkit-keyframes glow {
          from {
            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
          }
          
          to {
            text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
          }
        }
        </style>
</head>
<body>

<!--=================== Main Body Content Container ===================-->
<div class="paira-container">
    <!--=================== Header Container ===================-->
    <header>
        <!--=================== Header Top Section ===================-->
        <section class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--=================== Main Menu ===================-->
                        <!--=================== Multi Layout Mega Menu ===================-->
                        <nav class="navbar navbar-default paira-mega-menu mega-menu">
                            <div class="logo-text pull-left">
                                <h2 class="glow" class="margin-bottom-20 margin-top-30"><a href="{{url('/')}}">DrOnE</a></h2>
                            </div>
                            
                            <div class="dropdown cart-menu-body paira-cart-menu-body pull-right margin-top-30">
                                @if(Session::has('user'))
                                <a href="/cart" class="padding-bottom-10"><i class="fa fa-shopping-cart fa-2x"></i> ({{$total}})</a>

                                
                                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                                    <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                 <li><a href="/logout">LogOut</a></li>
    
                                         </ul>
                                              
                                              @else
                                         <li><a href="/login"></a></li>
                                                 @endif
                            </div>
                            <div class="navbar-header margin-top-15">
                                <button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle pull-right">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbar-collapse" class="navbar-collapse collapse pull-right">

                                <!--=================== Search Form ===================-->
                                <div class="dropdown navbar-form navbar-right navbar-search search-xs-fix margin-clear padding-clear margin-top-30 padding-right-15 padding-left-15">
                                    <a data-toggle="dropdown" href="#"><i class="fa fa-search fa-2x"></i></a>
                                    <ul class="dropdown-menu">
                                        <form class="navbar-form" action="http://demo.enpek.com/html-templates/stroller/search.html">
                                            <div class="form-group">
                                                <input type="text" name="q" class="form-control" placeholder="Search" value="">
                                            </div>
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Search</button>
                                        </form>
                                    </ul>
                                </div>
                                <ul class="nav navbar-nav">
                                    @if(Session::has('user'))
                                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                                    <li class=""><a href="{{url('/shop')}}">Shop</a></li>
                                    <li class=""><a href="{{url('/blog')}}">Blog</a></li>
                                    <li class=""><a href="{{url('/aboutus')}}">About us</a></li>
                                    <li class=""><a href="{{url('/login')}}">Login</a></li>
                                    <li class=""><a href="{{url('/myorders')}}">My Orders</a></li>
                                    @else
                                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                                    <li class=""><a href="{{url('/shop')}}">Shop</a></li>
                                    <li class=""><a href="{{url('/blog')}}">Blog</a></li>
                                    <li class=""><a href="{{url('/aboutus')}}">About us</a></li>
                                    <li class=""><a href="{{url('/login')}}">Login</a></li>
                                    <li class=""><a href="{{url('/register')}}">Register</a></li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                        <script>
                            $(function() {
                                /***************************************************************************************
                                 * Mega Menu
                                 ***************************************************************************************/
                                $(document).on('click', '.paira-mega-menu .paira-dropdown-menu', function(e) {
                                    e.stopPropagation();
                                });
                                $(document).on('click', '.paira-mega-menu .paira-angle-down', function(e) {
                                    e.preventDefault();
                                    $(this).parents('.paira-dropdown').find('.paira-dropdown-menu').toggleClass('active');
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>
    </header>