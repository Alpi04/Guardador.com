<?php
$login = $_POST['user'];
$senha = $_POST['pass'];

if($login == "superalpi" && $senha == "sup3tbvt")
{
    header("location:pagina_inicial.php");
}
else
{
    header("location:index.php");
}
?>