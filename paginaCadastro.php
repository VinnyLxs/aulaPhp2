<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de cadastro</title>
</head>
<body>
    <?php include 'Cadastro.php';  ?>
    <form method="POST">
    <label >CPF:</label>
    <input type="text" id="tCPF" name="tCPF"/>
    <br><br>

    <form method="POST">
    <label >Nome:</label>
    <input type="text" id="tNome" name="tNome"/>
    <br><br>

    <form method="POST">
        <label >Telefone:</label>
        <input type="text" id="tTel" name="tTel"/>
        <br><br>

        <form method="POST">
        <label >Endereço:</label>
        <input type="text" id="tEnd" name="tEnd"/>
        <br><br>

        <form method="POST">
        <label >Cidade:</label>
        <input type="text" id="tCid" name="tCid"/>
        <br><br>
        
        <button>Cadastrar
        <?php 
            function consultarObjeto(){
                $cpf      = $_POST['tCPF'];
                $nome     = $_POST['tNome'];
                $telefone = $_POST['tTel'];
                $endereco = $_POST['tEnd'];
                $cidade   = $_POST['tCid'];

                $cad = new Cadastro($cpf, $nome, $telefone, $endereco, $cidade);
                return $cad;
            }

        ?>        
        </button>
    </form>
    <?php
        echo consultarObjeto()->imprimir();
    ?>
</body>
</html>