<?php
include ("conexao.php");
if(isset($_POST["atualizar"]))
{ 
    $id = $_POST['id'];
    $nome = $_POST['nome']; 
    $genero = $_POST['genero'];
    $cap = $_POST['capitulos'];
    $aval = $_POST['avaliacao'];
    $dados = mysqli_query($conexao,"update media set Nome = '$nome',Genero = '$genero',Capitulos = '$cap',Avaliacao = '$aval' where ID like '$id'");
    if($dados)
    {
        header('location:pagina_inicial.php');
    }
    

}


?>