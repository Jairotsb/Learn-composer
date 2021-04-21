let lblMessage = document.querySelector('#lblMessage') 
let lblResponse = document.querySelector('#lblResponse') 
let lblName = document.querySelector('#lblName') 


const socket = new WebSocket('ws://localhost:9990/chat')


socket.addEventListener('message', (event) => {
    const data = JSON.parse(event.data)
    lblResponse.insertAdjacentHTML('beforeend', `<p>${data.nome} diz: ${data.mensagem}</p>`);
})

lblMessage.addEventListener('keyup', (event) => {
    if(event.keyCode === 13){
        const data = {
            nome: lblName.value,
            mensagem: lblMessage.value,
        }
        socket.send(JSON.stringify(data))
        lblMessage.value = ''
    }
})

