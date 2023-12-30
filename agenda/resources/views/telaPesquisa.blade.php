<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telaPesquisa</title>
   <link rel="stylesheet" href="/css/telaPesquisa.css">
</head>
<body>
      @if(session('success'))
         <p>{{ session('success') }}</p>
      @endif
       <div class="mae">
            <div class="img1">
               <img class="img" src="/img/telaPesquisa.png" alt="">
            </div>
            <div class="text">
              <h1>Pesquisar Contato</h1>

              <form action="/telaPesquisa" method="post">
                @csrf
                <input type="number" placeholder="Telefone:" name="telefone">
                <button class="button">Entrar</button><br><br>
              </form>

               <div class="caixinha">
                 <div>
                    @if($contato)
                        <h3>Nome: {{$contato->name}}</h3>
                        <h3>Telefone: {{$contato->telefone}}</h3>
                        <h3>Email: {{$contato->email}}</h3>
                    @else
                        <h3>Nenhum contato encontrado</h3>
                    @endif
                  </div>
               </div>
            </div>
       </div>
</body>
</html>
