let lblMessage = document.querySelector('#lblMessage') 
let lblResponse = document.querySelector('#lblResponse') 


const socket = new WebSocket('ws://localhost:9980/echo')

socket.addEventListener('open', () => {
    socket.send('Conexão estabelecida') 
})

socket.addEventListener('message')