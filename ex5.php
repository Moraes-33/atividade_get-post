<?php $erro = isset($_GET['erro']); ?><!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Ex4/5 - Formulário de Contato</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: system-ui, Arial; padding: 24px; }
    form { max-width: 560px; display: grid; gap: 12px; }
    input, textarea, button { padding: 10px; border-radius: 8px; border: 1px solid #ccc; }    textarea { min-height: 120px; }
    button { background:#111827; color:#fff; border:0; cursor:pointer; }    .erro { background:#fee2e2; color:#991b1b; border:1px solid #fecaca; padding:10px; border-radius:8px; margin-bottom:12px; }  </style>
</head>
<body>
  <h1>Fale com a gente</h1>

  <?php if ($erro): ?>    <div class="erro">⚠️ Preencha todos os campos antes de enviar.</div>
  <?php endif; ?>

  <form method="POST" action="enviar.php" accept-charset="UTF-8">
    <label for="nome">Nome</label>
    <input id="nome" name="nome" type="text" required>

    <label for="email">Email</label>
    <input id="email" name="email" type="email" required>

    <label for="mensagem">Mensagem</label>
    <textarea id="mensagem" name="mensagem" required></textarea>

    <button type="submit">Enviar</button>
  </form>
</body>
</html>