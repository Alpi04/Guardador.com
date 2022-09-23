<?php
include("conexao.php");

if(isset($_POST["submeter"]))
{
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $capitulos = $_POST['ep'];
    $avaliacao = $_POST['aval'];

    $sql = "insert into media (Nome, Genero, Capitulos, Avaliacao) values('$nome' ,'$genero','$capitulos','$avaliacao')";
    $dados = mysqli_query($conexao,$sql);
    if($dados)
    {
        ?>
        <script>
        alert('Mangá Guardado com sucesso!');
        </script>
        <?php
        header("location:pagina_inicial.php");
        
        
    }
}


?>