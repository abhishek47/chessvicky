  $(document).ready(function() {
       
      var tomove = $('#tomove').data('val');  
      var fen = $('#fen').data('val'); 
      var solution = $('#solution').data('val'); 
      var moves = $('#moves').data('val');
      var points = $('#points').data('val');
      var cId = $('#cId').data('val');
      
     console.log("FEN STRING : " + fen);

      var board,
        game = new Chess(fen);

      var statusEl = $('#status');


      var playAudio = function() {
          var audio = new Audio('../audio/mov.wav');
          audio.play();
      };


   
      

      var updateStatus = function() {
        var status = '';
         
        if(game.fen() != solution)
        {
            game.load(fen);
            board.position(game.fen());
            $('#board .square-55d63').css('background', '');

        } else {
          if(!($("#hint").hasClass("hidden")))
          {
              points = points - 10;    
          }
          swal("Good job!", "You completed the challenge and earned " + points + " points in your skillometer!", "success");
             var dataString = 'challengeId='+ cId +'&points='+points;
  
              $.ajax({
              type: "POST",
              url: '/userchallenges/store',
              data: dataString,
              cache: false,
              beforeSend: function(request){ return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));},
              success: function(html, window)
              { 
                    
              }
              });
        } 
        
        var moveColor = 'White';
        if (game.turn() === 'b') {
          moveColor = 'Black';
        }

        // checkmate?
        if (game.in_checkmate() === true) {
          status = 'chess over, ' + moveColor + ' is in checkmate.';

        }

        // draw?
        else if (game.in_draw() === true) {
          status = 'chess over, drawn position';
        }

        // chess still on
        else {
          status = moveColor + ' to move';

          // check?
          if (game.in_check() === true) {
            status += ', ' + moveColor + ' is in check';
          }
        }

        statusEl.html(status);
        
        board.position(game.fen());


      };

      var cfg = {
        draggable: false,
        position: 'start',
      };
      board = ChessBoard('board', cfg);
      
      updateStatus();



    

      function clickOnSquare(evt) {
        
       

        var square = $(this).data("square");
         var squareEl = $('#board .square-' + square);

           $('#board .square-55d63').css('background', '');
             // highlight the square they clicked over
        var background = '#a9a9a9';
        if (squareEl.hasClass('black-3c85d') === true) {
          background = '#696969';
        }

          squareEl.css('background', background);
        
          
          var source = $('#source').data('val');
          
          if(source == 0)
          {
            $('#source').data('val', square);
           
          } else {
              
              
              var destination = square;

           console.log(source+destination);

         
        var move = game.move({
          from: source.toString(),
          to: destination.toString(),
          promotion: 'q' // NOTE: always promote to a queen for example simplicity
        });
         

        // illegal move
        if (move != null) {
           board.position(game.fen());
           squareEl.css('background', background);
              var background = '#a9a9a9';
                if ($('#board .square-' + source).hasClass('black-3c85d') === true) {
                  background = '#696969';
                }
                 $('#board .square-' + source).css('background', background);
            playAudio();
           
            
        } else {
            
            
              $('#board .square-55d63').css('background', '');
             } 
              $('#source').data('val', 0);
              updateStatus();
          }

        
        
        
         
        console.log("You clicked on square: " + square);
      }

      $("#board").on("click", ".square-55d63", clickOnSquare);


      

 //the example code goes here
 });