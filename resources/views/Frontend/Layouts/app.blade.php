<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('hikers/fonts/icomoon/style.css')}}">
        <link rel="stylesheet" href="{{asset('hikers/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('hikers/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('hikers/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('hikers/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('hikers/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('hikers/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('hikers/fonts/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/materialdesign/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{asset('hikers/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('hikers/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('materialDesign\css\mdb.css') }}">
        <style>
            .bqX {
                height: 20px;
                opacity: .54;
                width: 20px;
                align-items: center;
                border: none;
                display: inline-flex;
                justify-content: center;
                outline: none;
                position: relative;
                z-index: 0;
                cursor: pointer;
                list-style: none;
                margin: 0 10px;
                font-size:24px;
            }
            .bqX:hover {
                opacity: 1;
            }
            .bqX:hover::before {
                background-color: rgba(32, 33, 36, 0.15);
                border: none;
                opacity: 1;
                transform: scale(1);
                color:#000;
            }
            .bqX::before {
                content: '';
                display: block;
                opacity: 0;
                position: absolute;
                transition-duration: .15s;
                transition-timing-function: cubic-bezier(0.4,0.0,0.2,1);
                z-index: -1;
                bottom: -10px;
                left: -10px;
                right: -10px;
                top: -10px;
                background: none;
                border-radius: 50%;
                box-sizing: border-box;
                transform: scale(0);
                transition-property: transform,opacity;
                bottom: -10px;
                left: -10px;
                right: -10px;
                top: -10px;
            }
            .bqX:after {
                content: '';
                height: 200%;
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
            }
            .bqX:hover i.mdi-pencil {
                color: #7cd1f9;
            }
            .bqX:hover i.mdi-delete {
                color: #FF4961;
            }
            .slogan-orgao, .nome-orgao {
                color: #10629e;
            }

            .nome-orgao {
                font-family: novecento_wide_bookbold;
                text-transform: uppercase;
            }
            .bg-img {
                width: 100%;
                height: 100%;
                background-image: url("../img/topo.jpg");
                background-repeat: no-repeat;
                background-size: contain;
                /* border: 1px solid red; */
            }
            .barra-governo {
                background-color: #F7FBFF;
                border-bottom: 1px solid #E7F0F9;
                height: 70px;
                padding: 0;
            }
            .accessibility {
                line-height: 70px;
                float: right;
                padding-left: 20px;
                border-left: 1px solid #F7FBFF;
                z-index: 2;
                position: relative;
            }
            .visible-desktop {
                display: inherit !important;
            }
            .accessibility button {
                margin: 0;
                color: #333;
                font-size: 12px;
                font-family: Tahoma, Geneva, sans-serif;
                border: 1px solid #333;
                background-color: #FFF;
                padding: 3px;
                display: inline-block;
                min-width: 25px;
                line-height: 17px;
                text-align: center;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                font-weight: bold;
            }
            .accessibility h6 {
                font-family: Tahoma, Geneva, sans-serif;
                font-size: 11px;
                color: #161616;
                display: inline;
                line-height: 27px;
                padding: 0;
                margin: 0;
                margin-right: 4px;
                font-weight: normal;
                text-transform: uppercase;
            }
            img.logo {
                margin-top: 5px;
                margin-left: 100px;
            }
            .pull-left {
                float: left;
            }
            img {
                width: auto\9;
                /* height: auto; */
                max-width: 100%;
                vertical-align: middle;
                border: 0;
                -ms-interpolation-mode: bicubic;
            }
        </style>
    </head>
    <body>
        <div class="barra-governo">
				<div class="container-fluid">
					<!--
                    <a href="http://www.amazonas.am.gov.br/" target="_blank">
						<img src="{{asset('img/marca-governo.png')}}" class="logo pull-left">
						<span id="slogan"></span>
					</a>
                    -->
					<!--
<div class="accessibility">
    <h1>Acessibilidade</h1>
    <a class="jfontsize-minus" href="#" onclick="return false;">A-</a>
    <a class="jfontsize-default" href="#" onclick="return false;">A</a>
    <a class="jfontsize-plus" href="#" onclick="return false;">A+</a>
    <a id="colorcontrast" class="colorcontrast" href="#" onclick="return false;">C</a>
</div>
-->
<div class="accessibility visible-desktop">
	<!--Inicio Conteúdo de acessibilidade-->
	<h6>Acessibilidade</h6>
	<button id="botaomais" onclick="aumentarFonte(); return false;">+A</button>
	<button onclick="normalizarFonte();">A</button>
	<button id="botaomenos" onclick="diminuirFonte();">-A</button>
	<button id="botaoContraste" onclick="fundoContraste();">C</button>
	<!--Fim Conteúdo de Acessibilidade-->
</div>				</div>
			</div>
        <div class="site-wrap">

            <div class="site-mobile-menu">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <header class="site-navbar pt-3" role="banner">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-6 col-xl-6 logo">
                            <h1 class="mb-0"><a href="@yield('link')" class="nome-orgao" style="font-size: 30px">@yield('logo')</a></h1>
                        </div>

                        <div class="col-6 mr-auto py-3 text-right" style="position: relative; top: 3px;">
                            <div class="social-icons d-inline">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                                <a href="#"><span class="icon-instagram"></span></a>
                            </div>
                            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-xl-none"><span class="icon-menu h3"></span></a>
                        </div>
                    </div>

                    <div class="col-12 d-none d-xl-block border-top">
                        <nav class="site-navigation text-center " role="navigation">

                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block mb-0">
                                <li class="active"><a href="@yield('link')">Home</a></li>
                                {{-- <li><a href="category.html">Clientes</a></li> --}}
                                <li class="has-children">
                                    <a href="category.html">Diário Oficial</a>
                                    <ul class="dropdown">
                                        <li><a href="category.html">O que é</a></li>
                                        <li><a href="category.html">Como Funciona</a></li>
                                        <li><a href="category.html">Beneficios</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Legislação</a></li>
                                <li><a href="category.html">O que pode ser publicado</a></li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </header>

            @yield('content')
            <div class="site-footer">
              <div class="container">
                <div class="row mb-5">
                  <div class="col-md-4">
                    <!--
                    <h3 class="footer-heading mb-4">Sobre o Diário</h3>
                    <p></p>
                    -->
                  </div>
                  <div class="col-md-3 ml-auto">
                    <h3 class="footer-heading mb-4">Menu Rápido</h3>
                    <ul class="list-unstyled float-left mr-5">
                      <li><a href="#">Sobre nós</a></li>
                      <li><a href="#">Anúncio</a></li>
                      <li><a href="#">Vagas</a></li>
                      <li><a href="#">Inscrever-se</a></li>
                    </ul>
                    <ul class="list-unstyled float-left">
                      <li><a href="#">Diretório</a></li>
                      <li><a href="#">A Empresa</a></li>
                      <li><a href="#">Serviços</a></li>
                      <li><a href="#">Contato</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-5">
                      <h3 class="footer-heading mb-4">Inscreva-se</h3>
                      <form action="" method="post" class="form-footer-subscribe">
                        <div class="form-group d-flex">
                          <input type="text" class="form-control">
                          <input type="submit" class="btn btn-primary text-white" value="Inscrever">
                        </div>
                      </form>
                    </div>

                    <div>
                      <h3 class="footer-heading mb-4">Conecte-se conosco</h3>
                      <p>
                        <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                        <a href="#"><span class="icon-twitter p-2"></span></a>
                        <a href="#"><span class="icon-instagram p-2"></span></a>
                        <a href="#"><span class="icon-rss p-2"></span></a>
                        <a href="#"><span class="icon-envelope p-2"></span></a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-center">
                    <p>

                      Copyright &copy; <script>document.write(new Date().getFullYear());</script> |  por <a href="https://diretoriodigital.com.br" target="_blank" >Diretório Digital</a>

                      </p>
                  </div>
                </div>
              </div>
            </div>

        </div>

        <script src="{{asset('hikers/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('hikers/js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('hikers/js/jquery-ui.js')}}"></script>
        <script src="{{asset('hikers/js/popper.min.js')}}"></script>
        <script src="{{asset('hikers/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('hikers/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('hikers/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('hikers/js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('hikers/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('hikers/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('hikers/js/aos.js')}}"></script>
        <script src="{{asset('hikers/js/main.js')}}"></script>
        <script type="text/javascript" src="{{ asset('materialDesign/js/mdb.js') }}"></script>
        @stack('scripts')

    </body>
</html>
