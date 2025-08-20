<?php $resultado = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
  $pass = isset($_POST['senha']) ? $_POST['senha'] : '';

  $resultado = $ok ? 'Acesso permitido' : 'Acesso negado';
  $safeUser = htmlspecialchars($user, ENT_QUOTES, 'UTF-8');
}?><!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Ex3 - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: system-ui, Arial; padding: 24px; }
    form { max-width: 420px; display: grid; gap: 12px; }
    input, button { padding: 10px; border-radius: 8px; border: 1px solid #ccc; }    button { background:#111827; color:#fff; border:0; cursor:pointer; }  </style>
</head>
<body>
  <h1>Login</h1>

  <?php if (!is_null($resultado)): ?>    <p><strong><?= $resultado ?></strong><?= isset($safeUser) ? " para o usuário {$safeUser}" : '' ?>.</p>
  <?php endif; ?>
  <form method="POST" action="" accept-charset="UTF-8" autocomplete="on">
    <label for="usuario">Usuário</label>
    <input id="usuario" name="usuario" type="text" required>

    <label for="senha">Senha</label>
    <input id="senha" name="senha" type="password" required>

    <button type="submit">Entrar</button>
  </form>
</body>
</html>