var board,
  chess;


var onSnapEnd = function() {
  board.position(chess.fen());
};

var cfg = {
  draggable: false,
  position: 'start',
 onSnapEnd: onSnapEnd
};

board = ChessBoard('board', cfg);
chess = new Chess();

var makeRandomMove = function() {
  var possibleMoves = chess.moves();

  // game over
  if (possibleMoves.length === 0) return;

  var randomIndex = Math.floor(Math.random() * possibleMoves.length);
  chess.move(possibleMoves[randomIndex]);
  board.position(chess.fen());
};


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

   
  var move = chess.move({
    from: source.toString(),
    to: destination.toString(),
    promotion: 'q' // NOTE: always promote to a queen for example simplicity
  });
   

  // illegal move
  if (move != null) {
     board.position(chess.fen());
      window.setTimeout(makeRandomMove, 250);
  }
      
       $('#source').data('val', 0);
        $('#board .square-55d63').css('background', '');
    }

  
  
  
   
  console.log("You clicked on square: " + square);
}

$("#board").on("click", ".square-55d63", clickOnSquare);