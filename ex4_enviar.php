<?php $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';$email = isset($_POST['email']) ? trim($_POST['email']) : '';$mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : '';
$safeNome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');$safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');$safeMsg = htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8');?><!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Ex4 - Enviado</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style> body { font-family: system-ui, Arial; padding: 24px; } pre { white-space: pre-wrap; } </style>
</head>
<body>
  <h1> Mensagem enviada!</h1>

  <?php if (!$nome || !$email || !$mensagem): ?>    <p>⚠️ Há campos vazios. Preencha todos.</p>
    <p><a href="index.php">Voltar</a></p>
  <?php else: ?>    <p><strong>Nome:</strong> <?= $safeNome ?></p>
    <p><strong>Email:</strong> <?= $safeEmail ?></p>
    <p><strong>Mensagem:</strong></p>
    <pre><?= $safeMsg ?></pre>
    <p><a href="index.php">Enviar outra</a></p>
  <?php endif; ?></body>
</html>