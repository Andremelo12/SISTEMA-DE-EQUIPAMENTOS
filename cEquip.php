<?php
    if(isset($_POST['submit']))
    {
    include_once('config.php');
    
        $id = $_POST['id'];
        $TAG = $_POST['TAG'];
        $Modelo = $_POST['Modelo'];
        $Marca = $_POST['Marca'];
        $Descrição = $_POST['Descrição'];
        $Grupo_eq = $_POST['Grupo_eq'];
        
        $result = mysqli_query($conexao, "INSERT INTO equipamentos(TAG,Modelo,Marca,Descrição,Grupo_eq) 
        VALUES ('$TAG','$Modelo','$Marca','$Descrição','$Grupo_eq')");

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Equipamento</title>
    <style>
        body{
            background: black;
            font-family: Arial;
        }
        .box{
            color: black;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(255, 255, 255, 0.4);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 1px solid white;
        }
        legend{
            border: 1px solid white;
            padding: 10px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: white;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: rgba(255,255,255, 0.2);
            width: 100%;
            border: none;
            padding: 15px;
            color: black;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: 
        }
    </style>
</head>
<body>
    <a href="index.php">Voltar</a>
    <div class="box">
        <form action="cEquip.php" method="POST">
            <fieldset>
                <legend><b>Adicionar Equipamento</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="TAG" id="TAG" class="inputUser" required>
                    <label for="TAG" class="labelInput">TAG</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Modelo" id="Modelo" class="inputUser" required>
                    <label for="Modelo" class="labelInput">Modelo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Marca" id="Marca" class="inputUser" required>
                    <label for="Marca" class="labelInput">Marca</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Descrição" id="Descrição" class="inputUser" required>
                    <label for="Descrição" class="labelInput">Descrição</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Grupo_eq" id="Grupo_eq" class="inputUser" required>
                    <label for="Grupo_eq" class="labelInput">Grupo do equipamento</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>