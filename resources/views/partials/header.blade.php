<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Designsninja">
<!-- description -->
<meta name="description" content="Torneo is creative agency, corporate, simple and clean template, Based on Bootstrap responsive multipurpose agency and portfolio HTML5 template with 28 unique home page demos">
<!-- keywords -->
<meta name="keywords" content="creative, animation, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- Core Style Sheets -->
<link rel="stylesheet" href="{{asset('theme/assets/css/master.css')}}">
{{-- Mon CSS --}}
<link rel="stylesheet" href="{{asset('theme/assets/css/monCss.css')}}">
<!-- Responsive Style Sheets -->
<link rel="stylesheet" href="{{asset('theme/assets/css/responsive.css')}}">
<!-- Revolution Style Sheets -->
<link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/navigation.css')}}">

</head>


<body>

    <!--== Loader Start ==-->
<div id="loader-overlay">
  <div class="loader">
    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
      <rect x="20" y="50" width="4" height="10" fill="#BF0731">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0" dur="0.6s" repeatCount="indefinite" />
      </rect>
      <rect x="30" y="50" width="4" height="10" fill="#BF0731">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0.2s" dur="0.6s" repeatCount="indefinite" />
      </rect>
      <rect x="40" y="50" width="4" height="10" fill="#BF0731">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0.4s" dur="0.6s" repeatCount="indefinite" />
      </rect>
    </svg>
  </div>
</div>
<!--== Loader End ==-->

<!--== Wrapper Start ==-->
<div class="wrapper">

  <!--== Header Start ==-->
  <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
  	<!--== Start Top Search ==-->
    <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="icofont icofont-close"></i></a>
      <div id="fullscreen-search-wrapper">
        <form method="get" id="fullscreen-searchform">
          <input type="text" value="" placeholder="Type and hit Enter..." id="fullscreen-search-input" class="search-bar-top">
          <i class="fullscreen-search-icon icofont icofont-search">
          <input value="" type="submit">
          </i>
        </form>
      </div>
    </div>
    <!--== End Top Search ==-->
    <div class="container">

      <!--== Start Header Navigation ==-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
        <div class="logo"> <a href="index.html"> <img class="logo logo-display" src="assets/images/logo-white.png" alt=""> <img class="logo logo-scrolled" src="assets/images/logo-black.png" alt=""> </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
          <li class="dropdown"> <a class="hovnav navtextcolor" href="{{route('welcome')}}">Accueil</a>
          
          </li>
          <li class="dropdown"><a class="hovnav navtextcolor" href="{{route('athlete')}}">L'athlète</a>

          </li>
          <li class="dropdown"> <a class="hovnav navtextcolor" href="{{route('academie')}}">Académie</a>
          
          </li>
          <li class="dropdown"> <a class="hovnav navtextcolor" href="{{route('engagement')}}">Mes engagements</a>
            
          </li>
          <li class="dropdown"><a class="hovnav navtextcolor" href="{{route('partenaire')}}">Les partenaires</a>

          </li>
          <li class="dropdown"> <a class="hovnav navtextcolor" href="{{route('presse')}}">Presses</a>
          
          </li>
        </ul>
      </div>
      <!--== /.navbar-collapse ==-->
    </div>
  </nav>
  <!--== Header End ==-->
