<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telaLogin</title>
   <link rel="stylesheet" href="/css/telaLogin.css">
</head>
<body>
      @if(session('success'))
         <script>
            alert("{{ session('success') }}");
         </script>
      @else(session('error'))
         <script>
            alert("{{ session('error') }}");
         </script>
      @endif
       <div class="mae">
            <div class="img1">
                <h3>Olá,seja bem vindo a sua loja Online!</h3>
               <img class="img" src="/img/tela2.png" alt="">
            </div>
            <div class="text">
               <img class="presente" src="/img/presente.png" alt="">

               <form action="" method="post">
                  @csrf
                  <a  class="botao" href="/telaCadastro" class="button">Cadastrar</a><br><br>
                  <a  class="botao"  href="/telaPesquisa" class="button">Pesquisar</a><br><br>
                  <a  class="botao1" href="/telaExcluir" class="button">Excluir</a><br><br>
               </form>
            </div>
       </div>
</body>
</html>
