var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('redis');
 
server.listen(8890);
io.on('connection', function (socket) {
 
  console.log("new client connected");
 
  socket.on("join", function(room) {
    socket.join(room);
    console.log('user joined room: ' + room);
  });
 
  socket.on("move", function(move) {
    console.log('user moved: ' + JSON.stringify(move));
    io.emit('move', move);
  });
 
  socket.on('disconnect', function() {
     console.log('user disconnected');
  });
 
});