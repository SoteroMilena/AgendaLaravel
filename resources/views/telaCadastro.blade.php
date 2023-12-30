<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telaCadastro</title>
   <link rel="stylesheet" href="/css/telaCadastro.css">
</head>
<body>
      @if(session('success'))
         <script>
            alert("{{ session('success') }}");
         </script>
      @endif
       <div class="mae">
            <div class="img1">
               <img class="img" src="/img/telaCadastro.png" alt="">
            </div>
            <div class="text">
                <h1>Cadastrar Contato</h1>
               <form action="/telaCadastro" method="post">
                  @csrf
                  <input type="text" name="telefone" placeholder="Telefone:" required><br><br>
                  <input type="name" name="name" placeholder="Nome:" required><br><br>
                  <input type="Email" name="email" placeholder="Email:" required><br><br>
                  <input type="date" name="nascimento" class="date" placeholder="Data de Nascimento:" required><br><br><br>
                  <button type="submit" class="button">Entrar</button><br><br>
               </form>
            </div>
       </div>
</body>
</html>
