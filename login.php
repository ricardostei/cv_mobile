<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login.css">
</head>

<body>
<div class="center">
<h2>Login</h2>
    <form action="/action_page.php" method="post">
    <div class="container">
        <label for="uname"><b>Usuário</b></label>
        <input type="text" placeholder="Usuário" name="uname" required>

        <label for="psw"><b>Senha</b></label>
        <input type="password" placeholder="Senha" name="psw" required>
            
        <button type="submit">Login</button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Lembrar-me
        </label>
    </div>
</div>
</form>

</body>
</html>

