<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    
    <title>Cadastro de usuários</title>
</head>

<body>
    <h2 class="">CADASTRO<h2>
    <div class="cadastro_square">
    <form action="processar_cadastro.php" method="post">

        <label for="username">Nome de Usuário:</label>
        <input class="caixa_entrada" type="text" id="username" name="username" required><br><br>

        <label for="name">Nome:</label>
        <input class="caixa_entrada" type="text" id="name" name="name" required><br><br>

        <label for="name">Info Adicionais:</label>
        <input class="caixa_entrada" type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input class="caixa_entrada" type="email" id="email" name="email" required><br><br>

        <button class="btn">Cadastrar</button>
    </form>
    </div>

</body>
</html>

