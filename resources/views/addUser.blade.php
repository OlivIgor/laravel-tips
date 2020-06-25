<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de usuario</title>
</head>
<body>
    <form action="{{ route('users.store' )}}" method="post">
        @csrf
        <label for="">Nome do usuario:</label>
        <input type="text" name="name" id="">
        <label for="">E-mail do usuario:</label>
        <input type="email" name="email" id="">
        <label for="">Senha do usuario:</label>
        <input type="password" name="password" id="">

        <input type="submit" value="Cadastrar Usuario">
    </form>
</body>
</html>
