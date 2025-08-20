<?php $email = isset($_POST['email']) ? trim($_POST['email']) : '';$telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';
$safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');$safeTelefone = htmlspecialchars($telefone, ENT_QUOTES, 'UTF-8');
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Ex2 - Resposta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style> body { font-family: system-ui, Arial; padding: 24px; } </style>
</head>
<body>
  <h1>Dados recebidos via POST</h1>

  <?php if (!$email || !$telefone): ?>    <p>⚠️ Preencha email e telefone.</p>
    <p><a href="index.php">Voltar</a></p>
  <?php else: ?>    <p><strong>Email:</strong> <?= $safeEmail ?> <?= $emailValido ? '' : ' (Formato inválido)' ?></p>
    <p><strong>Telefone:</strong> <?= $safeTelefone ?> <?= $telMinOk ? '' : ' (Muito curto)' ?></p>
    <p><a href="index.php">Voltar</a></p>
  <?php endif; ?></body>
</html>