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
        "ano" => 2021,
        "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML."
      ],
      [
        "titulo" => "Lista de tarefas",
        "finalizado" => true,
        "ano" => 2022,
        "descricao" => "Lista de tarefas. Escrito em PHP e HTML."
      ],
      [
        "titulo" => "Controle de leitura de livros",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" => "Controle de leitura de livros. Escrito em PHP e HTML."
      ],
      [
        "titulo" => "Mais um projeto",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Mais um projeto. Escrito em PHP e HTML."
      ]
      ];
    
    function verificarSeEstaFinalizado($projeto) {
      if($projeto['finalizado']) {
        return '<span style="color: green">Finalizado</span>';
      }

      return '<span style="color: red">Não finalizado</span>';      
    }

    function filtro($itens, $funcao) {
      $filtrados = [];

      foreach ($itens as $item) {
        if($funcao($item)) {
          $filtrados [] = $item;
        }
      }

      return $filtrados;
    }

    $projetosFiltrados = filtro($projetos, function ($projeto) {
      return $projeto['ano'] === 2024 || $projeto['ano'] === 2021;
    });

  ?>
  <h1><?=$titulo; ?></h1>
  <p><?=$subtitulo; ?></p>
  <p><?php echo $ano; ?></p>

  <hr>

  <ul>
    <?php foreach ($projetosFiltrados as $projeto): ?>
      <div
    <?php if((2024 - $ano) > 2): ?>
      style="background-color: burlywood;"
    <?php endif;?>
  >
    <h2><?=$projeto['titulo'];?></h2>
    <p><?=$projeto['descricao'];?></p>
    <div>
      <div><?=$projeto['ano'];?></div>
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