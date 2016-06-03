<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChessVicky | Chess Courses, articles, tutorials, forum and more...</title>

    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/ef3b39e542.js"></script>
    
    <!-- Sweet Alert -->
    <link href="/css/sweetalert.css" rel="stylesheet" type="text/css">
    
      <link href="http://vjs.zencdn.net/5.9.2/video-js.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/swipebox.min.css">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/core.css" rel="stylesheet" type="text/css" />
    <link href="/css/components.css" rel="stylesheet" type="text/css" />
    <link href="/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="/css/responsive.css" rel="stylesheet" type="text/css" />
     <link href="/css/switchery.min.css" rel="stylesheet" />
   
   
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

  

</head>
<body id="app-layout">
    
         @include('partials.admin.header')

          @yield('content')

    
  
        <script src="/js/detect.js"></script>
        <script src="/js/fastclick.js"></script>
        <script src="/js/jquery.slimscroll.js"></script>
        <script src="/js/jquery.blockUI.js"></script>
        <script src="/js/waves.js"></script>
        <script src="/js/wow.min.js"></script>
        <script src="/js/jquery.nicescroll.js"></script>
        <script src="/js/jquery.scrollTo.min.js"></script>

        <script src="/js/jquery.core.js"></script>
        <script src="/js/jquery.app.js"></script> 

        <script src="/js/sweetalert.min.js"></script>
            <!-- Bootstrap-tagsinput  -->


 <script src="http://vjs.zencdn.net/5.9.2/video.js"></script>
      


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/auth.js"></script> 
   

 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      
        <script src="/js/bootstrap-tagsinput.min.js"></script>
        


@yield('scripts')

<script type="text/javascript">
(function($){

  'use strict';

  function initNavbar () {

    $('.navbar-toggle').on('click', function(event) {
      $(this).toggleClass('open');
      $('#navigation').slideToggle(400);
      $('.cart, .search').removeClass('open');
    });

    $('.navigation-menu>li').slice(-1).addClass('last-elements');

    $('.navigation-menu li.has-submenu a[href="#"]').on('click', function(e) {
      if ($(window).width() < 992) {
        e.preventDefault();
        $(this).parent('li').toggleClass('open').find('.submenu:first').toggleClass('open');
      }
    });
  }

  function init () {
    initNavbar();
  }

  init();

})(jQuery)



</script>



</body>
</html>
