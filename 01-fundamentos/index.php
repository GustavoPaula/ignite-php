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
    $ano = 2024;
  ?>
  <h1><?=$titulo; ?></h1>
  <p><?=$subtitulo; ?></p>
  <p><?php echo $ano; ?></p>
</body>
</html>