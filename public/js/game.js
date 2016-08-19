  $(document).ready(function() {
     
    var pcolor;
      
    $("#gameid").val(makeid());

    var socket = io.connect('http://localhost:3000');
                                        //initiated socket client
    socket.emit('join', getParameterByName('gameid'));  //join room as defined by query parameter in URL bar

      var board,
        game = new Chess();

      var statusEl = $('#status'),
        fenEl = $('#fen'),
        pgnEl = $('#pgn');


      var playAudio = function() {
          var audio = new Audio('../audio/mov.wav');
          audio.play();
      };
      
     $("#newGame").on("click", function() {
         pcolor = $('#color-white').hasClass('active') ? 'white' : 'black';
         board.orientation(pcolor);
      });

      var updateStatus = function() {
        var status = '';


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
        fenEl.html(game.fen());
        pgnEl.html(game.pgn({ max_width: 5, newline_char: '<br />' }));


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
           socket.emit('move', move);
           squareEl.css('background', background);
              var background = '#a9a9a9';
                if ($('#board .square-' + source).hasClass('black-3c85d') === true) {
                  background = '#696969';
                }
                 $('#board .square-' + source).css('background', background);
              $('#opponentStatus').removeClass("hidden");
        $('#playerStatus').addClass("hidden"); 

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


       socket.on('move', function(moveObj){ //remote move by peer
        console.log('peer move: ' + JSON.stringify(moveObj));
         var move = game.move(moveObj);
        // illegal move
        if (move === null) {
          return;
        }
        updateStatus();
        board.position(game.fen());
        
        $('#opponentStatus').addClass("hidden");
        $('#playerStatus').removeClass("hidden");  

         $('#board .square-55d63').css('background', '');

                var background = '#a9a9a9';
              if ($('#board .square-' + move.to).hasClass('black-3c85d') === true) {
                background = '#696969';
              }
               $('#board .square-' + move.to).css('background', background);

               var background = '#a9a9a9';
              if ($('#board .square-' + move.from).hasClass('black-3c85d') === true) {
                background = '#696969';
              }
               $('#board .square-' + move.from).css('background', background);
                playAudio();
      });
      
      function makeid()
      {
          var text = "";
          var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

          for( var i=0; i < 5; i++ )
              text += possible.charAt(Math.floor(Math.random() * possible.length));

          return text;
      }
 //the example code goes here
 });