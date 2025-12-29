<!DOCTYPE html>
<html>
<head>
    <title>Usuário</title>
</head>
<body>

<h1>Área do Usuário</h1>

<p>Bem-vindo, {{ auth()->user()->name }}</p>

<a href="/logout">Sair</a>

</body>
</html>
