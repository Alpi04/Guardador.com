<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/organizar_css.css?v=<?php echo time();?>">
    <title>Inserir</title>
</head>
<body>
<body>
      <br>
      <br>
      <br>
      <br>
      <center><div class="container">
      <form action="validar_inserir.php" method="post">
        <br>
        <input type="text" name ="nome" id="nome" placeholder="Introduza o Nome do mangá (em maiúsculas)">
        <br>
        <br>
        <br>
        <input type="text" name ="genero" id="genero" placeholder="Introduza o género do mangá">
        <br>
        <br>
        <br>
        <input type="text" name ="ep" id="ep" placeholder="Introduza o número de episódios do mangá">
        <br>
        <br>
        <br>
        <input type="text" name ="aval" id="aval" placeholder="Avalie o mangá (1 a 10)">
        <br>
        <br>
        <br>
<br>
<br>
<br>

      <input type="submit" name="submeter" id="submeter" >
    </form>
      </div></center>
</body>
</html>