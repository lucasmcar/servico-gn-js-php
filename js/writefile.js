
function escreverNome(){
    
    var userName = document.getElementById('nome').value;

    const  data = {userName};

    if(userName == undefined || userName == ""){
        openWindowDialog();
        return;
    }

    fetch('../scripts/trataNomeComputador.php', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {"Content-type" : "application.json; charset=UTF-8"}
    })
    .then(resp => resp.json())
    .then(data => console.log(data))
    .catch((err) => console.log(err));

    /*if(localStorage.getItem('nomes') === null){
        localStorage.setItem('nomes', JSON.stringify([data]));
    } else {
        localStorage.setItem(
            'nomes',
            JSON.stringify([
                ...JSON.parse(localStorage.getItem('nomes')), data
            ])
        );

        
    }
    renderItem(data);*/

    document.getElementById('nome').value = "";
             
}

/*function renderItem(item){
    var node = document.createElement('li');
    //var btnAdd = document.getElementById('add');
    node.classList.add('list-group-item');
    node.appendChild(document.createTextNode(item.userName));

    document.querySelector('ul').appendChild(node);


    let lista = document.getElementById('lista');
    
    lista.classList.add('list-group');
    
}*/

/*function getItems(){
    const items = JSON.parse(localStorage.getItem('nomes'));

    items.forEach(item => renderItem(item));
}


getItems();*/

