<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">

        
    </head>
    

<body>

    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 class="logo">ServiCompu</h1>
            </div>
            <div class="main-header__contactInfo column column--50">

                <p class="main-header__contactInfo__phone">
                    <span class="icon-phone"> 999-999-999 </span>
                    <!-- <a target="_BLANCK" href="login.html" class="icon-sign-in social-icon__link derecha menu__login"> Iniciar Sesión</a>
                </p>-->
                <p class="main-header__contactInfo__address">
                    <span class="icon-location"> Loremp ImpLorem ipsum, dolor</span>
                </p>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item text_center {{request()->routeIs('welcome') ? 'active': ''}}" ><a href="/" class="menu__link ">Inicio</a></li>
                <li class="menu__item text_center {{request()->routeIs('productos') ? 'active': ''}}"><a href="/productos" class="menu__link">Productos</a></li>
                <li class="menu__item text_center {{request()->routeIs('promociones') ? 'active': ''}}"><a href="/promociones" class="menu__link menu__link--select">Promociones</a></li>
            </ul>
            
                
                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="icon-sign-in menu__login">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="icon-sign-in menu__login">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>


        </div>

    </nav>

    


    <section class="banner">
        <img src="../img/titulo.jpg" alt="" class="banner__img">
        <div class="banner__content"> Productos de Calidad a tu Alcance.</div>
    </section>

     <h2 class="centrado centradoSecundario">Conoce Nuestras Promociones con descuentos desde el 25%</h2>
    <main id="principal">
        <div id="divisorPrincipal">
            <div id="teclado">
                <p class="products__title">Tenemos las siguientes promociones</p>
                <!--AGREGO EL CONTENIDO DE LA PAGINA TECLADOS-->
                <div id="divisorTeclados">
                    <div id="tecladoUno">
                        <!--Inicia el primer producto en venta-->

                        <div id="ParlanteP1" class="flexPromocion">
                            <div class="flexPromocionIcono">
                                 <p class="centradoSecundarioPromocion">Parlantes</p>
                                <aside style="display: none;">Parlantes</aside>
                                <img src="../img/parlantesp1.jpg" alt="imagene parlante" />
                            </div>
                            <ul class="flexPromocionIcono">
                                <li class="text_dos">Cualquier marca o modelo con el 20%de descuento.</li>
                                <button class="botonComprar">Comprar</button>
                            </ul>
                        </div>
                    </div>
                    <!--Termina el primer producto en venta-->
                    <div id="tecladoDos">
                        <!--Inicia el segundo producto en venta-->

                        <div id="Computadores2" class="flexPromocion">
                            <div class="flexPromocionIcono">
                                <p class="centradoSecundarioPromocion">Computadores con CPU incorporado</p>
                                <img src="../img/pc3.jpg" alt="imagene teclado" />
                            </div>
                           <ul class="flexPromocionIcono">
                                <li class="text_dos">Computadores DELL, HP, NOVA, LEXUS desde los $250.</li>
                                <li class="text_dos">Garantía de 1 año</li>
                                <button class="botonComprar">Comprar</button>
                            </ul>
                        </div>
                    </div>
                    <!--Termina el segundo producto en venta-->
                    <div id="equipo3">
                        <!--Inicia el tercer producto en venta-->

                        <div id="comp4" class="flexPromocion">
                            <div class="flexPromocionIcono">
                                
                                <aside style="display: none;">Computador Hp</aside>
                                <img src="../img/pc6.jpg" alt="imagene teclado" />
                            </div>
                            <ul class="flexPromocionIcono">
                            	 <li class="text_dos">Por su compra en efectivo reciba una tajeta de GOOGLE PLAY</li>
                                <li class="text_dos">Garantía limitada de 3 años</li>
                                <button class="botonComprar">Comprar</button>
                            </ul>
                        </div>
                    </div>
                    <!--Termina el tercer producto en venta-->
                    <div id="tecladoCuatro">
                        <!--Inicia el cuarto producto en venta-->

                        <div id="tecladoGamer" class="flexPromocion">
                            <div class="flexPromocionIcono">
                                <p class="centradoSecundarioPromocion">Computador LG</p>
                                <img src="../img/pc4.jpg" alt="imagene teclado" />
                            </div>
                            <ul class="flexPromocionIcono">
                                <li class="text_dos">Te lo puedes llevar por tan solo $300 dólares</li>
                                <li class="text_dos">De regalo, mouse inalambrico y protector de teclado</li>
                                <button class="botonComprar">Comprar</button>
                            </ul>
                        </div>
                    </div>

                    <div id="tecladoQuinto">
                        <!--Inicia el cuarto producto en venta-->

                        <div id="tecladoGamer" class="flexPromocion">
                            <div class="flexPromocionIcono">
                                <p class="centradoSecundarioPromocion">Computador GAMING ASUS</p>
                                <img src="../img/gaming.jpg" alt="imagene teclado" />
                            </div>
                            <ul class="flexPromocionIcono">
                                <li class="text_dos">Eres amante a los videojuegos, pues llego nuestro computadora gamer ASUS, en donde podrás jugar diferentes tipos de videojuegos a una resolucion UHD</li>
                                <li class="text_dos">Descuento del 20% si lo pagas en efectivo</li>
                                <button class="botonComprar">Comprar</button>
                            </ul>
                        </div>
                    </div>


                </div>
   

    
                
    </body>
</html>
