<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $TAG = $_POST['TAG'];
        $Modelo = $_POST['Modelo'];
        $Marca = $_POST['Marca'];
        $Descrição = $_POST['Descrição'];
        $Grupo_eq = $_POST['Grupo_eq'];
        
        $sqlInsert = "UPDATE equipamentos
        SET TAG='$TAG',Descrição='$Descrição',Modelo='$Modelo',Marca='$Marca',Descrição='$Descrição',Grupo_eq='$Grupo_eq'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: index.php');

?>