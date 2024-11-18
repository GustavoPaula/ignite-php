<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Portfolio</title>
</head>
<body>
  <?php
    $nome = "Gustavo";
    $saudacao = "Oi, ";
    $titulo = $saudacao . "Portfolio do " . $nome;
    $subtitulo = "Seja bem vindo ao meu Portfolio!!!";
    $ano = 2020;

    $projeto = "Meu Portfolio";
    $finalizado = true; // true,1 ou false,0
    $dataDoProjeto = "2024-11-13";
    $descricao = "Meu primeiro Portfolio. Escrito em PHP e HTML.";

    $projetos = [
      [
        "titulo" => "Meu Portfolio",
        "finalizado" => false,
        "data" => "2024-11-13",
        "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML."
      ],
      [
        "titulo" => "Lista de tarefas",
        "finalizado" => true,
        "data" => "2024-11-11",
        "descricao" => "Lista de tarefas. Escrito em PHP e HTML."
      ]
      ];
    
    function verificarSeEstaFinalizado($projeto) {
      if($projeto['finalizado']) {
        return '<span style="color: green">Finalizado</span>';
      }

      return '<span style="color: red">Não finalizado</span>';      
    }

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
        <?php 
          echo verificarSeEstaFinalizado($projeto); 
          ?>
        <!-- <?php if(!$projeto['finalizado']): ?>
          <span style="color: red;">Não finalizado</span>
        <?php else: ?>
          <span style="color: green;">Finalizado</span>
        <?php endif; ?> -->
      </div>
    </div>
  </div>
    <?php endforeach; ?>
  </ul>
</body>
</html>