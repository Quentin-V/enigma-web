const net = require("net");
const server = net.createServer((socket)=>{
    socket.write("Well done, you found me, the answer is Shy\n")
    socket.close()
});
server.listen(7777);
