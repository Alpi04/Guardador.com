<?php                                  


include ('conexao.php');



$id= $_REQUEST['id'];
$sql= " delete from media where ID = '$id'";

$dados= mysqli_query($conexao,$sql);
if($dados)
{
    ?>
<script>
    alert "O mangá foi eliminado com sucesso!";
</script>
    <?php
    header('location:pagina_inicial.php');
}
else
{
    echo "A eliminação não foi aplicada devido a algum erro";
}

?>
