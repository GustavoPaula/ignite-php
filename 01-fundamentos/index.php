<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Portifolio</title>
</head>
<body>
  <?php
    $nome = "Gustavo";
    $saudacao = "Oi, ";
    $titulo = $saudacao . "Portifolio do " . $nome;
    $subtitulo = "Seja bem vindo ao meu portifolio!!!";
    $ano = 2020;

    $projeto = "Meu Portifolio";
    $finalizado = true; // true,1 ou false,0
    $dataDoProjeto = "2024-11-13";
    $descricao = "Meu primeiro portifolio. Escrito em PHP e HTML.";

    $projetos = [
      [
        "titulo" => "Meu portifolio",
        "finalizado" => false,
        "data" => "2024-11-13",
        "descricao" => "Meu primeiro portifolio. Escrito em PHP e HTML."
      ],
      [
        "titulo" => "Lista de tarefas",
        "finalizado" => true,
        "data" => "2024-11-11",
        "descricao" => "Lista de tarefas. Escrito em PHP e HTML."
      ]
    ]
  ?>
  <h1><?=$titulo; ?></h1>
  <p><?=$subtitulo; ?></p>
  <p><?php echo $ano; ?></p>

  <hr>

  <ul>
    <?php foreach ($projetos as $projeto): ?>
      <div
    <?php if((2024 - $ano) > 2): ?>
      style="background-color: burlywood;"
    <?php endif;?>
  >
    <h2><?=$projeto['titulo'];?></h2>
    <p><?=$projeto['descricao'];?></p>
    <div>
      <div><?=$projeto['data'];?></div>
      <div>Projeto:
        <?php if(!$projeto['finalizado']): ?>
          <span style="color: red;">Não finalizado</span>
        <?php else: ?>
          <span style="color: green;">Finalizado</span>
        <?php endif; ?>
      </div>
    </div>
  </div>
    <?php endforeach; ?>
  </ul>
</body>
</html>