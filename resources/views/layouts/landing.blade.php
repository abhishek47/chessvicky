<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChessVicky | Chess Courses, articles, tutorials, forum and more...</title>
    
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/ef3b39e542.js"></script>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/swipebox.min.css">
    <link href="/css/landing.css" rel="stylesheet">
    <link href="/css/clock.css" rel="stylesheet">
    <link href="/css/responsive.landing.css" rel="stylesheet">


   

</head>
<body id="app-layout">
   

    @yield('content')


       <!-- Footer -->
   <div class="footer" id="social">
   <div class="container">
     <div class="row">
       
      <!-- Address -->
      <p >
          <b class="brand"><i class="fa fa-copyright"></i> ChessVicky {{ date('Y') }}</b></p>
         <p> Nashik,Maharashtra<p/>
         <p> India - 422002</p>
          <p>Email : <a href="mailto:contact@chessvicky.com">contact@chessvicky.com</a></p>
             
      </p>
    
     
   </div>
   </div> 
  
   </div>
    <div class="copyright">
        <p class="text-center"><i class="fa fa-code"></i> Powered By <a href="http://www.trumpetstechnologies.com/" target="_blank">Trumpets Technologies Pvt. Ltd.</a></p>
   </div>

   
   

   <!-- Modal -->
<div class="modal fade" id="botvinnikModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Botvinnik Chess School</h4>
      </div>
      <div class="modal-body">
        <h3>An Institute By Mr. Sunil Sharma</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      
    </div>
  </div>
</div>  
 

   <!-- Modal -->
<div class="modal fade" id="akashModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Akash Developers</h4>
      </div>
      <div class="modal-body">
        <h3>Real Estate Dealers and Land Developers</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      
    </div>
  </div>
</div>  
 



   


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.swipebox.min.js"></script>
    <script src="/js/pages.js"></script> 
    <script src="/js/clock.js"></script> 
    
    <script type="text/javascript">
;( function( $ ) {

  $( '.swipebox' ).swipebox();

} )( jQuery );
</script>

</body>
</html>
