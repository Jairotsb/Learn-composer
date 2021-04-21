let lblMessage = document.querySelector('#lblMessage') 
let lblResponse = document.querySelector('#lblResponse') 


const socket = new WebSocket('ws://localhost:9980/echo')

socket.addEventListener('open', () => {
    socket.send('Conexão estabelecida') 
})

socket.addEventListener('message', (event) => {
   // lblResponse.insertAdjacentHTML('beforeend', "<p><b>Servidor diz: </b>" + event.data + "</p>");
   console.log(event.data)
})

lblMessage.addEventListener('keyup', (event) => {
    if(event.keyCode === 13){
        socket.send(lblMessage.value)
        lblMessage.value = ''
    }
})

