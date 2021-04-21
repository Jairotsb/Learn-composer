const form = document.querySelector('#form')


form.onsubmit = async event => {
    event.preventDefault() 
    const data = new FormData(form)
    const result = await (await fetch(`src/php/insert_name.php`, {
        method: 'POST',
        body: data
    })).json()

    if(result.status === '1'){
        window.location.href = '../../'
    }
}


