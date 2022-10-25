<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div id="container" class="container">

        <div class="row">
            <div class="col-sm">
                <img height="250" width="300" src="imagem/teste.jpg" alt="teste">
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-3">
                <form action="scripts/trataNomeComputador.php" method="POST">
                    <div class="form-group">
                        <label>Insira seu nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira seu nome">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" id="add" type="button" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
                
            </div>
        </div>

        
    </div>


    <div class="modal">
        <div class="content">
            <p>Por favor, preencher o campo <strong>Nome</strong></p>
            <button id="btnClose">Fechar</button>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h6>Nomes Adicionados</h6>
   
                <ul id="lista" class="list-group">
                <?php 
                require('./conexao/Conexao.php');
                Conexao::getInstance();
                $db = new Conexao();
                $data = $db->getNome();
                ?>
                <?php foreach($data as $nome) { ?>
                    <?php echo "<li class='list-group-item'>" .$nome['nome']. "</li>"; ?>
                <?php } ?>
                </ul>
            </div>
        </div>
        
    </div>
    
    
    <script src="js/FileSaver.js"></script>
    <script src="js/writefile.js"></script>
    <script src="js/block.js"></script>

</body>
</html>