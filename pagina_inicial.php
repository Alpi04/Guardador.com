<?php
include("conexao.php");
?>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css_table.css?v=<?php echo time();?>">
    <title>Página Inicial</title>
</head>
<body>
<div class="botoes">
    <a class="button-65" href="inserir_media.php">Inserir Novo</a>
</div>

    <table class="table">


      <?php
$sql= " select * from media order by Nome";

$resultados= mysqli_query($conexao,$sql);

if (mysqli_num_rows ($resultados) >0) 
{
?>
  <br> 
  <thead>
  <tr>
       <th>Nome</th>
       <th>Género</th>
       <th>Capítulos</th>
       <th>Avaliação</th>
       <th>Eliminar</th>
       <th>Editar</th>
  </tr> 
  </thead>
  <tbody>
<?php
    while ($registo=mysqli_fetch_assoc($resultados))
     {
        echo '<tr>';
         echo '<td data-label ="Nome">'; echo $registo['Nome']; echo '</td>'; 
         echo '<td data-label ="Género">'; echo $registo['Genero'];  echo '</td>'; 
         echo '<td data-label ="Capítulos">'; echo $registo['Capitulos'];   echo '</td>';
         echo '<td data-label ="Avaliação">'; echo $registo['Avaliacao'];   echo '</td>';
         ?>
          <td data-label ="Eliminar">
           <center><a href="eliminar_media.php?id=<?php echo($registo['ID']);?>"><img src="img/remove.png"  title="Eliminar" width="15">
         </td>
         <td data-label ="Editar">
           <center><a href="editar_media.php?id=<?php echo($registo['ID']);?>"><img src="img/botao-editar.png"  title="Editar" width="15">
         </td>
     </tr>
     </tbody>
          <?php
    }

?>
</table>
<?php
}
else
{
    echo  "<center>" . "Não existem registos no momento" . "</center>";
}
?>   
 </table>
</body>
</html>