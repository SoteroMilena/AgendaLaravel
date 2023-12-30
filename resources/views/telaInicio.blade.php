<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telaInicio</title>
    <link rel="stylesheet" href="/css/telaInicio.css">
</head>

<body>
    <div class="mae">
        <div class="img1">
            <img class="img" src="/img/tela1.svg" alt="">
        </div>
        <div class="text">
            <h1>AgendaContatos</h1>
            <form action="/validacao" method="POST">
                @csrf
                <input name="email" type="Email" placeholder="Email:"><br><br>
                <input name="senha" type="password" placeholder="Senha:"><br><br>
                <button type="submit" class="button">Entrar</button>
            </form>
        </div>
        @if(session('message'))
        <div style="color:red;">{{ session('message') }}</div>
        @endif
    </div>
</body>

</html>
