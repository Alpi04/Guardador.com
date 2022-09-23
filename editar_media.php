<?php
include ("conexao.php");
$id = $_REQUEST['id'];

                $sql = "select * from media where ID = '$id'";

                $resultado = mysqli_query($conexao,$sql);

                if(mysqli_num_rows($resultado)>0){


                        if($registo=mysqli_fetch_assoc($resultado))
                        {
                            $nome = $registo['Nome'];   
                            $genero = $registo['Genero'];   
                            $cap = $registo['Capitulos'];
                            $avaliacao = $registo['Avaliacao'];
                            
                        }
                    }

                   
?>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <style>
        .container
        {
            align-content: center;
	border-radius: 10px;
	padding-top: 40px;
	width: 500px;
	height: 300px;
	background-color: #ffffff;
	overflow: hidden;
	color: #ffffff;
        }
        .trcss{
padding-top:10px;
        }
    </style>
</head>
<body>
<body style="background-color:rgba( 71, 147, 227, 1);">
<center>
<div>
<form action="atualizar.php" method="post">
    <input type="text" name="id" value="<?php echo $id ?>"hidden>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
    <table style=" background-color: white;padding-top:50px;">
    <thead>
    <tr>      
        <td colspan="2"><center><label>Editar Mangá:</label></center> </td>
    <tr>      
</thead>

        <tr class="trcss">
            <td><label for="nome">Nome do Mangá:</label></td>
            <td><input type="text" name="nome" value="<?php echo $nome ?>"></td>
        </tr>
        <tr class="trcss">
            <td><label for="genero">Género:</label></td>
            <td><input type="text" name="genero" value="<?php echo $genero ?>"></td>
        </tr>
        <tr class="trcss">
            <td><label for="capitulos">Capítulos:</label></td>
            <td><input type="text" name="capitulos" value="<?php echo $cap ?>"></td>
        </tr>
        <tr class="trcss">
            <td><label for="avaliacao">Avaliação:</label></td>
            <td><input type="text" name="avaliacao" value="<?php echo $avaliacao ?>"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="Finalizar" name="atualizar" style = "width:100%;height:25">
        </td>
        </tr>
</table>
    </div>
    
</form>
</div>
</body>
</html>