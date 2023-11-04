<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/logo2r.jpeg" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>

<body class="bodyIMG">
  <div class="center">
    <h1>Login</h1>
    <form method="post" action="./PHP/insercao/login.php">
      <div class="txt_field">
        <input type="text" name="usuario" required>
        <span></span>
        <label>Usuário</label>
      </div>
      <div class="txt_field">
        <input type="password" name="senha" required>
        <span></span>

        <label>Senha</label>
        
      </div>
      <div class="pass">
        <a href="forget_pass.php">Esqueceu a senha?</a>
      </div>
      <input type="submit" value="Login">
      <div class="signup_link">
        Primeiro acesso?<a href="primeiro_acesso.php"> Clique aqui!</a>
      </div>
    </form>


  </div>
</body>

</html>