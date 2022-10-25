let inputNome = document.getElementById('nome');
let modal = document.querySelector('.modal');
let button = document.querySelector('#btnClose');

//Veririfica o movimento do mouse e se ele esta saindo da da página para abrir um popup
document.addEventListener('mousemove', (e)=>{

   
    if(inputNome.value === "" && getWindowWH(e)){
        openWindowDialog();
    }
    inputNome.focus();
}, true);


function getWindowWH(e){

    client = {
        x: e.pageX,
        y: e.pageY
    }
    if(client.y <= 5){
        return true;
    }
}

const openWindowDialog = () => {
    const dialog = document.querySelector('.modal');
    const visibilidade = dialog.style.display;

    if(visibilidade == ' block'){
        dialog.style.display = 'none';
    } else {
        dialog.style.display = 'block';
        inputNome.disabled = true;
    }
}

button.onclick = function(){
   modal.style.display = 'none';
   inputNome.disabled = false;
}

