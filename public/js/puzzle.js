window.onload = function initialSetup() {
	setup();
}

function setup() {
	
	// Clear the board
	var chessPuzzle = document.getElementById("chesspuzzle");
	var allSquares = chessPuzzle.getElementsByTagName("div");
	 
	for (var i = 0; i < allSquares.length; i++) {    	allSquares[i].className = "empty";
}
	// Setup the pieces for the puzzle
	puzzleSetup();
	//Determine whose move it is
	document.getElementById("to_move").innerHTML = toMove;
}

function select(square) {
	if (selectCounter == 0) {
		square.style.border = "1px solid #F00";
		sqOne = square;
		newClass = square.className;
		sqOneId = square.getAttribute("id");
		document.getElementById("announcement").innerHTML = "";
		selectCounter += 1;
	}
	else if (selectCounter == 1) {
		sqTwo = square;
		sqTwoId = square.getAttribute("id");
		
		// Load chess puzzle
		puzzleMoves();
		
		// Test to see if they have chosen the correct move
		if ((sqOneId == move) && (sqTwoId == target)) {
			movePiece(sqOne,sqTwo);
			if(toMove == "Black to move, and checkmate&ndash;in&ndash;one move!") {
				document.getElementById("notation").innerHTML += notation;
			}
			else {
				document.getElementById("notation").innerHTML += "<br />" + notation;
			}
			
			if (lastMove == true) {
				document.getElementById("to_move").innerHTML = "";
				document.getElementById("click").innerHTML = "";announcement = "Congratulations! You solved the problem. Please fill out the form below to enter our Weekly Contest drawing."
				document.getElementById("contest_form").style.display = "block";	
			}
			else {
				respond(response1,response2,response3);	
			}
			document.getElementById("announcement").innerHTML = announcement;
			puzzleCounter += 1;
		}
		else {
			document.getElementById("announcement").innerHTML = "That move is incorrect. Please try again.";	
			setup();
			puzzleCounter = 0;
			lastMove = false;
			document.getElementById("notation").innerHTML = "";
		}
		sqOne.style.border = "none";
		selectCounter = 0;
	}
	else {
		alert("false");	
	}
}

function movePiece(squareOne,squareTwo) {
	squareOne.className = "empty";
	squareTwo.className = newClass;	
}

function respond(respondSqOne,respondSqTwo,respondNotation) {
	sqThree = document.getElementById(respondSqOne);
	sqFour = document.getElementById(respondSqTwo);
	newClass = sqThree.className;
	movePiece(sqThree,sqFour);
	if(toMove == "Black to move, and checkmate&ndash;in&ndash;one move!") {
		document.getElementById("notation").innerHTML += "<br />" + respondNotation;
	}
	else {
		document.getElementById("notation").innerHTML += respondNotation;
	}
}
var puzzleCounter = 0;
var selectCounter = 0;
var move, target, notation, response = "";
var announcement = "That move is correct!";
var lastMove = false;
var newClass;
var sqOneId;
var sqTwoId;
var sqOne;
var sqTwo;
//White to move first unless otherwise specified
var toMove = "white";



//Unique to the individual puzzle

function puzzleMoves() {
		// Check to see which move the person is on
		if (puzzleCounter == 0) {
			move = "gsix";
			target = "gseven";
			notation = "1. g7# Checkmate!";
			lastMove = true;
		}
		else {
			move = "";
			target = "";
		}	
}

function puzzleSetup() {
	document.getElementById("beight").className = "brook";
	document.getElementById("height").className = "bking";		
	document.getElementById("eseven").className = "wrook";		
	document.getElementById("fseven").className = "wking";		
	document.getElementById("hseven").className = "bknight";		
	document.getElementById("gsix").className = "wpawn";		
	document.getElementById("hsix").className = "wpawn";		
	document.getElementById("bthree").className = "bpawn";		
	document.getElementById("atwo").className = "bpawn";
		document.getElementById("colorman").innerHTML = toMove;
		document.getElementById("colormantwo").innerHTML = toMove;		
}