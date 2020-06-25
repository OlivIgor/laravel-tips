<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar usuario</title>
</head>
<body>
<form action="{{ route('users.edit', ['user' => $user->id])  }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Nome do usuario:</label>
    <input type="text" name="name" id="" value="{{ $user->name }}">
    <label for="">E-mail do usuario:</label>
    <input type="email" name="email" id="" value="{{$user->email}}">
    <label for="">Senha do usuario:</label>
    <input type="password" name="password" id="" value="{{$user->password}}">

    <input type="submit" value="Editar Usuario">
</form>
</body>
</html>
