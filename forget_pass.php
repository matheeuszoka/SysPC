<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./Public/img/logo.jpeg" type="image/x-icon">
  <link rel="stylesheet" href="./Public/assets/style.css">
  <title>Recuperar senha</title>
</head>

<body class="bodyIMG">
  <div class="center">
    <h1>Recuperar Senha!</h1>
    <form method="post" action="./Public/php/forget.password.php">
      <div class="txt_field">
        <input type="password" name="senha1" required>
        <span></span>
        <label>Senha</label>
      </div>
      <div class="txt_field">
        <input type="password" name="senha2" required>
        <span></span>
        <label>Confirme a Senha</label>
      </div>
      <input type="submit" value="Enviar">
    </form>

  </br></br></br>

  </div>
</body>

</html>