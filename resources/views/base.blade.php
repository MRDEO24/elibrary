<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Library - {{ $judul_halaman }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/icomoon.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/transitions.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/color-purple.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <script src="/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body class="tg-home tg-homevtwo">

    <!--************************************
   Wrapper Start
 *************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
    Header Start
  *************************************-->
        <header id="tg-header" class="tg-header tg-headervtwo tg-haslayout">

            <div class="tg-middlecontainer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <strong class="tg-logo"><a href="/"><img src="/assets/images/logo.png"
                                        alt="company name here"></a></strong>
                            <div class="tg-searchbox">
                                <form class="tg-formtheme tg-formsearch">
                                    <fieldset>
                                        <input type="text" name="search" class="typeahead form-control"
                                            placeholder="Cari buku...">
                                        <button type="submit" class="tg-btn">Cari</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-navigationarea">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-navigationholder">
                                <nav id="tg-nav" class="tg-nav">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#tg-navigation" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                        <ul>

                                            <li><a href="/">Beranda</a></li>
                                            @if(Auth::user() && Auth::user()->is_admin == 1 )
                                            <li><a href="/dashboard">Dashboard</a></li>
                                            @endif
                                            <li><a href="#">Tentang Kami</a></li>
                                            <li><a href="/allbook">Semua Buku</a></li>
                                            
                                           
                                       
                                        </ul>
                                    </div>
                                    
                                </nav>
                                @if(Auth::user())
                                <div class="tg-wishlistandcart">
                                    
                                    <div class="dropdown tg-themedropdown tg-currencydropdown">
                                        <a href="javascript:void(0);" id="tg-currenty" class="tg-btnthemedropdown"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>Selamat datang, {{Auth::user()->name;}}</span>
                                        </a>
                                        <ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-currenty">
                                            <li>
                                                <a  href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                    <span>{{ __('Logout') }}</span>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                @else
                                <div class="tg-wishlistandcart">
                                <div class="dropdown tg-themedropdown tg-wishlistdropdown">
                                    <a href="/login" id="tg-wishlisst" class="tg-btnthemedropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                                        Login
                                    </a>
                                   
                                </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
   
    <!--************************************
    Header End
  *************************************-->
    @yield('content')
    <!--************************************
    Footer Start
  *************************************-->
    <footer id="tg-footer" class="tg-footer tg-haslayout">
        <div class="tg-footerarea">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="tg-clientservices">
                            <li class="tg-devlivery">
                                <span class="tg-clientserviceicon"><i class="icon-rocket"></i></span>
                                <div class="tg-titlesubtitle">
                                    <h3>Fleksibel</h3>

                                </div>
                            </li>
                            <li class="tg-discount">
                                <span class="tg-clientserviceicon"><i class="icon-tag"></i></span>
                                <div class="tg-titlesubtitle">
                                    <h3>Terjangkau</h3>

                                </div>
                            </li>
                            <li class="tg-quality">
                                <span class="tg-clientserviceicon"><i class="icon-leaf"></i></span>
                                <div class="tg-titlesubtitle">
                                    <h3>Ramah</h3>

                                </div>
                            </li>
                            <li class="tg-support">
                                <span class="tg-clientserviceicon"><i class="icon-heart"></i></span>
                                <div class="tg-titlesubtitle">
                                    <h3>24/7 suport</h3>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tg-threecolumns">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="tg-footercol">
                                <strong class="tg-logo"><a href="javascript:void(0);"><img
                                            src="/assets/images/logo.png" alt="image description"></a></strong>
                                <ul class="tg-contactinfo">

                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span>
                                            <em>0800 12345 - 678 - 89</em>
                                            <em>+4 1234 - 4567 - 67</em>
                                        </span>
                                    </li>

                                    <li>
                                        <i class="icon-envelope"></i>
                                        <span>
                                            <em><a href="mailto:support@domain.com">support@domain.com</a></em>
                                            <em><a href="mailto:info@domain.com">info@domain.com</a></em>
                                        </span>
                                    </li>
                                </ul>
                                <ul class="tg-socialicons">
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i
                                                class="fa fa-linkedin"></i></a></li>
                                    <li class="tg-googleplus"><a href="javascript:void(0);"><i
                                                class="fa fa-google-plus"></i></a></li>
                                    <li class="tg-rss"><a href="javascript:void(0);"><i
                                                class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="tg-footercol tg-widget tg-widgetnavigation">
                                <div class="tg-widgettitle">
                                    <h3>Menu</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li><a href="javascript:void(0);">Beranda</a></li>
                                        <li><a href="javascript:void(0);">Tentang kami</a></li>
                                        <li><a href="javascript:void(0);">Customer Service</a></li>
                                        <li><a href="javascript:void(0);">Cari Buku</a></li>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="tg-footerbar">
            <a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i
                    class="icon-chevron-up"></i></a>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <span class="tg-copyright">2022 All Rights Reserved By &copy; E-Library</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--************************************
    Footer End
  *************************************-->
    </div>
    <!--************************************
   Wrapper End
 *************************************-->
    <script src="/assets/js/vendor/jquery-library.js"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.vide.min.js"></script>
    <script src="/assets/js/countdown.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/parallax.js"></script>
    <script src="/assets/js/countTo.js"></script>
    <script src="/assets/js/appear.js"></script>
    <script src="/assets/js/gmap3.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });
    </script>
</body>

</html>
