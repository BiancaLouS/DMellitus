<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form">
          <div class="form-image">
            <img src="../Img/logoPequena.jpg" alt="">
          </div>
            <form action="" method="post" name="" id="" >
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="cadastro.php">Cadastra-se</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email"  placeholder="Digite seu email" required >
                    </div>
                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>
                <input type="submit" name="entrar" id="entrar" class="continue-button" value="Entrar">
            </form>
        </div>
    </div>