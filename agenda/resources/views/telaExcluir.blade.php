<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telaExcluir</title>
   <link rel="stylesheet" href="/css/telaPesquisa.css">
</head>
<body>
       <div class="mae">
            <div class="img1">
               <img class="img" src="/img/telaExcluir.png" alt="">
            </div>
            <div class="text">
               <h1>Excluir Contato</h1>
               <form action="/telaExcluir" method="post">
                  @csrf
                  <input type="number" name="telefone" placeholder="Telefone:">
                  <button type="submit" class="button">Excluir</button><br><br>
               </form>
       </div>
</body>
</html>
