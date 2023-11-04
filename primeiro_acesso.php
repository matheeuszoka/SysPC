<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./Public/img/logo.jpeg" type="image/x-icon">
  <link rel="stylesheet" href="./Public/assets/style.css">
  <title>Primeiro Acesso</title>  
</head>

<body class="bodyIMG">
  <div class="center">
    <h1>Primeiro Acesso!</h1>
    <form method="post" action="./Public/php/primeiro.acesso.php">
      <div class="txt_field">
        <input type="text" name="nome" required>
        <span></span>
        <label>Nome</label>
      </div>
      <div class="txt_field">
        <input type="email" name="email" required>
        <span></span>
        <label>Email</label>
      </div>
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
      <input type="submit" value="Enviar">
    </form>
  </br></br></br>


  </div>
</body>

</html>