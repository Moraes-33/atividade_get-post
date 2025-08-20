<?php 
  header('Location: index.php?erro=1');
  exit();
}
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Ex5 - Enviado</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style> body { font-family: system-ui, Arial; padding: 24px; } pre { white-space: pre-wrap; } </style>
</head>
<body>
  <h1> Mensagem enviada!</h1>
  <p><strong>Nome:</strong> <?= $safeNome ?></p>
  <p><strong>Email:</strong> <?= $safeEmail ?></p>
  <p><strong>Mensagem:</strong></p>
  <pre><?= $safeMsg ?></pre>
  <p><a href="index.php">Enviar outra</a></p>
</body>
</html>