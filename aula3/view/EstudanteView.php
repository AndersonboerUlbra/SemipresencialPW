<?php $listaEstudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
        <img class="w-40 d-block mx-auto border border-primary border-3 mt-5" src="imagem1.png" alt="conjunto de imagens cartooniando que representam afoordances simbolizando acessibilidade">
    
        <div><h3 class="text-primary text-center">Semana da Acessibilidade</h1></div>

        <div class="container text-center mt-5">
      <a href="/aula3/?class=Estudante&acao=salvar" class="btn btn-primary">Cadastrar Estudante</a>
    </div>
       
        <div class="container mb-5 mt-1 bg-primary ">
    <table class="table table-bordered table-striped table-dark border border-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <tbody>
    
    
    <?php foreach ($listaEstudantes as $estudante) { ?>
           <tr>
                
                <td><?php echo $estudante["id"]; ?></td>
                <td><?php echo $estudante["nome"]; ?></td>
                <td><?php echo $estudante["idade"]; ?></td>
           </tr>
    
        <?php } ?>
  </tbody>
</table>


    </div>
    </div>
</body>
</html>