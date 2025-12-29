<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>

<h2>Cadastro</h2>

<form method="POST" action="/register">
    @csrf

    <input type="text" name="name" placeholder="Nome" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Senha" required><br><br>

    <button type="submit">Cadastrar</button>
</form>

<p>
    Já tem conta?
    <a href="/login">Entrar</a>
</p>

</body>
</html>
