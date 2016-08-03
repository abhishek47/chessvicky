<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChessVicky | Chess Courses, articles, tutorials, forum and more...</title>

    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
   
    
    <!-- Sweet Alert -->
    <link href="/css/sweetalert.css" rel="stylesheet" type="text/css">
    
      
      <link href="https://vjs.zencdn.net/5.9.2/video-js.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/swipebox.min.css">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/core.css" rel="stylesheet" type="text/css" />
    <link href="/css/components.css" rel="stylesheet" type="text/css" />
    <link href="/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" type="text/css" href="/css/chessboard-0.3.0.css">

  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>


  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78815181-1', 'auto');
  ga('send', 'pageview');

</script>


</head>
<body id="app-layout">
    
         @include('partials.header')

          @yield('content')

    
 
        <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
      
     
        <script src="/js/sweetalert.min.js"></script>


         <!-- Typeahead.js Bundle -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <!-- Typeahead Initialization -->
    <script>
        jQuery(document).ready(function($) {
            // Set the Options for "Bloodhound" suggestion engine
            var engine = new Bloodhound({
                remote: {
                    url: '/findusers?q=%QUERY%',
                    wildcard: '%QUERY%'
                },
                datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
                queryTokenizer: Bloodhound.tokenizers.whitespace
            });

            $("#user-search").typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                source: engine.ttAdapter(),

                // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
                name: 'usersList',

                // the key from the array we want to display (name,id,email,etc...)
                templates: {
                    empty: [
                        '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
                    ],
                    header: [
                        '<ul class="dropdown-menu dropdown-menu-lg"><li class="list-group nicescroll notification-list" tabindex="5000" style="overflow: hidden; outline: none;">'
                    ],

                    footer: [
                         '</li></ul>'
                    ],
                    suggestion: function (data) {
                        return '<a href="/profile/' + data.username + '" class="list-group-item">' + '<div class="media"><div class="pull-left p-r-10"></div><div class="media-body"><h5 class="media-heading">' + data.fname + ' ' + data.lname + ' @' + data.username + '</h5><p class="m-0"><small>' + data.email  + '</small></p></div></div>' + '</a>'

              }
                }
            });
        });
    </script>


      

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>


    

 <script src="https://vjs.zencdn.net/5.9.2/video.js"></script>

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
