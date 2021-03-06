<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('analises/css/bootstrap.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('analises/css/w3.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset ('analises/css/headerEfooter.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('analises/css/modelo.css')}}">
    <script src="{{ asset ('analises/js/jquery-3.3.1.js')}}"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    
  
</head>
<body> 
    <div class="headerBase">
        <div class="header-distributed container">
            <div class="header-left">
                <img class="companyLogo" src="{{  asset('img/hcm_logo.png')}}">
            </div>
            <div class="header-center">
                <label class="webPageTitle" >Laboratório de Análises Clínicas</label>
            </div>
            <div class="header-right">
                <div class="userLoged">
                    <div class="imgeBlock">
                        <img class="userImage" src="{{ asset('img/user_normal.png')}}">
                </div>
                 @if(isset(Auth::user()->email))
                    <strong style="font-size: 10px;">{{ Auth::user()->email }}</strong>
                    <span class="separator">|</span>
                    <a href="{{ url('/main/logout') }}" style="font-size: 10px;color: red;">Sair</a>
                 @endif   
                </div>
            </div>
        </div>
    </div>
    <div class=" headerOptionsBase">
        <div class="container">
            <div class="w3-bar w3-center headerOptions " style="width:100%; overflow:hidden;height:44px">
                <a class="w3-bar-item w3-button" href="#" title="">Início</a>
                @yield('menu')
                <a class="w3-bar-item w3-button" href="#" title="">Ajuda</a>

            </div>
        </div>
    </div>

<div class="container">
    <main>
       @yield('main')
    </main>
</div>
<br>
<br>
<br>
<br>
    <footer class="footer-distributed">
        <div class="footer-left">
            <!--<div class="footIn">-->
                <ul class="listaDeRedes">
                    <li class="itemDeRede">
                        <a class="rede" href="https://www.facebook.com/">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="itemDeRede">

                        <a class="rede" href="https://twitter.com/">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="itemDeRede">

                        <a class="rede" href="https://mail.google.com/mail/u/0/#inbox?compose=163d221a11c2747c">
                            <i class="fa fa-google-plus"> </i>
                        </a>
                    </li>
                    <li class="itemDeRede">
                        <a class="rede" href="https://mz.linkedin.com/">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="itemDeRede">
                        <a class="rede" href="https://www.instagram.com">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            <!--</div>-->
        </div>
        <!--<div class="footer-center">-->
        <!--</div>-->
        <div class="footer-right">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Av. Agostinho Neto 245</span>Maputo, Mocambique</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+258 82 012 3456</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">info.lac@hcm.co.mz</a></p>
            </div>
            </div>
        </div>
    </footer>
    <div class="copyRigth">© 2018 Copyright:
        <a href="http://www.hcm.gov.mz/"> Hospital Central de Maputo</a>
    </div>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>