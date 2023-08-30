<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estudante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
<br>
<br>
    <h2 class="text-primary text-center"> Cadastro de Estudante</h2>
    <div class="container text-primary">
    <form method="POST" action="/aula3/?class=Estudante&acao=salvar">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>
  <div class="mb-3">
    <label for="idade" class="form-label">Idade</label>
    <input type="number" class="form-control" id="idade" name="idade">
  </div>
  
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

    </div>








</body>
</html>