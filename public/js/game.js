var board,
  chess = new Chess();

var statusEl = $('#status'),
  fenEl = $('#fen'),
  pgnEl = $('#pgn');


var row = '<div class="pgn-row">';
var element1 = '<a href="#" class="pgnlink">';
var element2 = '<a href="#" class="pgnlink2">';
var elementEnd = '</a>';
var rowEnd = '</div>';
var newline = '<br>';
var rowCount = 0;
var countelement = '<p class="rowCount">';
var countelementend = '. </p>';

var playAudio = function() {
    var audio = new Audio('../audio/mov.wav');
    audio.play();
};

var updateStatus = function() {
  var status = '';


  var moveColor = 'White';
  if (chess.turn() === 'b') {
    moveColor = 'Black';
  }

  // checkmate?
  if (chess.in_checkmate() === true) {
    status = 'chess over, ' + moveColor + ' is in checkmate.';
  }

  // draw?
  else if (chess.in_draw() === true) {
    status = 'chess over, drawn position';
  }

  // chess still on
  else {
    status = moveColor + ' to move';

    // check?
    if (chess.in_check() === true) {
      status += ', ' + moveColor + ' is in check';
    }
  }

  statusEl.html(status);
  fenEl.html(chess.fen());
  pgnEl.html(chess.pgn({ max_width: 5, newline_char: '<br />' }));


};

var cfg = {
  draggable: false,
  position: 'start',
};
board = ChessBoard('board', cfg);

updateStatus();



var makeRandomMove = function() {
  var possibleMoves = chess.moves({
    verbose: true
  });


  // chess over
  if (possibleMoves.length === 0) return;

  var randomIndex = Math.floor(Math.random() * possibleMoves.length);
  var move = possibleMoves[randomIndex];
  chess.move(possibleMoves[randomIndex]);
  board.position(chess.fen());

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
    console.log(move.san);
   playAudio();
   
   $('#moves').append(element2+move.san+elementEnd);
    updateStatus();

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
     squareEl.css('background', background);
        var background = '#a9a9a9';
          if ($('#board .square-' + source).hasClass('black-3c85d') === true) {
            background = '#696969';
          }
           $('#board .square-' + source).css('background', background);
      playAudio();
      window.setTimeout(makeRandomMove, 550);
      
      var html = $('#moves').html();
      
      rowCount++;
      $('#moves').append(newline+rowCount+'. '+element1+move.san+elementEnd);
      
  } else {
      
      
        $('#board .square-55d63').css('background', '');
       } 
        $('#source').data('val', 0);
        updateStatus();
    }

  
  
  
   
  console.log("You clicked on square: " + square);
}

$("#board").on("click", ".square-55d63", clickOnSquare);