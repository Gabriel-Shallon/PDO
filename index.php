<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //$codigo = (isset($_POST['codigo']) ? $_POST['codigo'] : null);
        $titulo = (isset($_POST['titulo']) ? $_POST['titulo'] : null);
        $descricao = (isset($_POST['descricao']) ? $_POST['descricao'] : null);
        //$dataTab = (isset($_POST['dataTab']) ? $_POST['dataTab'] : null);
        $statusTab = (isset($_POST['statusTab']) ? $_POST['statusTab'] : null);

        require_once "Conexao.class.php";
        require_once "AchadosEPerdidos.class.php";
        $achadosEPerdidos = new AchadosEPerdidos($titulo, $descricao, $statusTab);
        $conexao = new Conexao();
        $conexao->insert($achadosEPerdidos);
        $dados = $conexao->selectALL();
        foreach($dados as $row){
            echo $row['codigo'] ."<br />" .
            $row['titulo'] ."<br />" . 
            $row['descricao'] ."<br />" . 
            $row['datatab'] ."<br />" . 
            $row['statustab'] ."<br /><br /><br /><br />";
        }
    }
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achados e Perdidos</title>
</head>
<body>
    <form method='post'>
     <fieldset>
        <legend>Registra Achados e Perdidos</legend>
        <label for="titulo">Título: </label>
        <input type="text" name="titulo" id="titulo" required><br />
        <label for="descricao">Descrição: </label>
        <textarea name="descricao" id="descricao"></textarea><br />
        <label for="dataTab">Data do Achado/Perda: </label>
        <input type="date" name="dataTab" id="dataTab"><br />
        <label for="statusTab">Status: </label>
        <select name="statusTab" id="statusTab">
            <option value="encontrado">Encontrado</option>
            <option value="perdido">Perdido</option>
        </select><br />
        <button type="submit">Registrar</button>
     </fieldset>
    </form>
</body>
</html>