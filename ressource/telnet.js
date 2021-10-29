const net = require("net");
const server = net.createServer(socket => {
    socket.write("Well done, you found me, the answer is Shy\n")
    try {
	    socket.end()
    }catch(err) {
	    console.log(`Couldn't close socket`)
    }
});
server.listen(7777);
