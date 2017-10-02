<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        
                <!-- bootstrap laravel -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrappage.css') }}" rel="stylesheet">

        
        <!-- global styles laravel -->
        <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        

        <!-- scripts laravel -->
        <script src="{{ asset('js/jquery-1.7.2.min.js') }}" rel="stylesheet"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet"></script>
        <script src="{{ asset('js/superfish.js') }}" rel="stylesheet"></script>
        <script src="{{ asset('js/jquery.scrolltotop.js') }}" rel="stylesheet"></script>
        




    <title>{{ config('app.name', 'tushar') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
<!--  -->
            <div id="top-bar" class="container">
            <div class="row">
                <div class="span4">
                    <form method="POST" class="search_form">
                        <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
                    </form>
                </div>
                <div class="span8">
                    <div class="account pull-right">
                        <ul class="user-menu">              
                            <li><a href="#">My Account</a></li>
                            <li><a href="cart">Your Cart</a></li>
                            <li><a href="checkout">Checkout</a></li>                    
                            @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest      
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            
        <div id="wrapper" class="container">
            <section class="navbar main-menu">
                <div class="navbar-inner main-menu">                
                    <a href="index.html" class="logo pull-left"><img src={{ asset('img/logo.png')}} src="themes/images//logo.png" class="site_logo" alt=""></a>
                    <nav id="menu" class="pull-right">
                        <ul>
                            <li><a href="./products.html">Woman</a>                 
                                <ul>
                                    <li><a href="./products.html">Lacinia nibh</a></li>                                 
                                    <li><a href="./products.html">Eget molestie</a></li>
                                    <li><a href="./products.html">Varius purus</a></li>                                 
                                </ul>
                            </li>                                                           
                            <li><a href="./products.html">Man</a></li>          
                            <li><a href="./products.html">Sport</a>
                                <ul>                                    
                                    <li><a href="./products.html">Gifts and Tech</a></li>
                                    <li><a href="./products.html">Ties and Hats</a></li>
                                    <li><a href="./products.html">Cold Weather</a></li>
                                </ul>
                            </li>                           
                            <li><a href="./products.html">Hangbag</a></li>
                            <li><a href="./products.html">Best Seller</a></li>
                            <li><a href="./products.html">Top Seller</a></li>
                        </ul>
                    </nav>
                </div>
            </section>          
            </div>

   
    <div id="wrapper" class="container">
     <section class="header_text sub">
            <img class="pageBanner" src={{asset('img/pageBanner.png')}} alt="New products" >
                <h4><span>Login or Regsiter</span></h4>
            </section>  


        @yield('content')
    
    
    <section id="footer-bar">
                <div class="row">
                    <div class="span3">
                        <h4>Navigation</h4>
                        <ul class="nav">
                            <li><a href="./index.html">Homepage</a></li>  
                            <li><a href="./about.html">About Us</a></li>
                            <li><a href="./contact">Contac Us</a></li>
                            <li><a href="./cart.html">Your Cart</a></li>
                            <li><a href="./register.html">Login</a></li>                            
                        </ul>                   
                    </div>
                    <div class="span4">
                        <h4>My Account</h4>
                        <ul class="nav">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </div>
                    <div class="span5">
                        <p class="logo"><img src={{asset('img/logo.png')}} src="themes/images/logo.png" class="site_logo" alt=""></p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
                        <br/>
                        <span class="social_icons">
                            <a class="facebook" href="#">Facebook</a>
                            <a class="twitter" href="#">Twitter</a>
                            <a class="skype" href="#">Skype</a>
                            <a class="vimeo" href="#">Vimeo</a>
                        </span>
                    </div>                  
                </div>  
            </section>
            <section id="copyright">
                <span>Copyright {{ date('Y') }} Shopping cart  All right reserved.</span>
            </section>
            </div>

        </div>
        <script src="themes/js/common.js"></script>
        <script src="themes/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript">
            $(function() {
                $(document).ready(function() {
                    $('.flexslider').flexslider({
                        animation: "fade",
                        slideshowSpeed: 4000,
                        animationSpeed: 600,
                        controlNav: false,
                        directionNav: true,
                        controlsContainer: ".flex-container" // the container that holds the flexslider
                    });
                });
            });
        </script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
