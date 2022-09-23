<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form action = "Valida_login.php" method ="post">
  <div class="form-field">
    <input type="username" name="user" placeholder="Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="pass" placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit">Entrar</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>
