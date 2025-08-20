<?php ?><!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Ex1 - Boas-vindas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: system-ui, Arial; padding: 24px; }
    .card { max-width:600px; margin:0 auto; border:1px solid #e5e7eb; border-radius:12px; padding:24px; }    a { color:#2563eb; text-decoration:none; } a:hover { text-decoration:underline; }  </style>
</head>
<body>
  <div class="card">
    <?php if ($username !== ''): ?>
      <h1>Bem-vindo, <strong><?= $safe ?></strong>! 👋</h1>
    <?php else: ?>
      <h1>Você não informou um nome de usuário.</h1>
    <?php endif; ?>
    <p><a href="index.php">Voltar</a></p>
  </div>
</body>
</html>