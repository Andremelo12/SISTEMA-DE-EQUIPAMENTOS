<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM equipamentos WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $TAG = $user_data['TAG'];
                $Modelo = $user_data['Modelo'];
                $Marca = $user_data['Marca'];
                $Descrição = $user_data['Descrição'];
                $Grupo_eq = $user_data['Grupo_eq'];
            }
        }
        else
        {
            header('Location: index.php');
        }
    }
    else
    {
        header('Location: index.php');
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
        <form action="sEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Equipamento</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="TAG" id="TAG" class="inputUser" value=<?php echo $TAG;?> required>
                    <label for="TAG" class="labelInput">TAG</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Modelo" id="Modelo" class="inputUser" value=<?php echo $Modelo;?> required>
                    <label for="Modelo" class="labelInput">Modelo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Marca" id="Marca" class="inputUser" value=<?php echo $Marca;?> required>
                    <label for="Marca" class="labelInput">Marca</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Descrição" id="Descrição" class="inputUser" value=<?php echo $Descrição;?> required>
                    <label for="Descrição" class="labelInput">Descrição</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Grupo_eq" id="Grupo_eq" class="inputUser" value=<?php echo $Grupo_eq;?> required>
                    <label for="Grupo_eq" class="labelInput">Grupo do equipamento</label>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>