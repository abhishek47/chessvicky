var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('redis');


server.listen(3000, function(){
  console.log("Listening On Port 3000");

 });
console.log("Node Server Started");

io.on('connection', function (socket) {
 
  console.log("new client connected");
   io.on('connection', function(socket){ //join room on connect
    socket.on('join', function(room) {
      socket.join(room);
      console.log('user joined room: ' + room);
    });
    socket.on('move', function(move) { //move object emitter
      console.log('user moved: ' + JSON.stringify(move));
      io.emit('move', move);
    });
  });
 
  socket.on('disconnect', function() {
   
  });
 
});
 

