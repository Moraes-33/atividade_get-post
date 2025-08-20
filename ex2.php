<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Ex2 - POST Email e Telefone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: system-ui, Arial; padding: 24px; }
    form { max-width: 420px; display: grid; gap: 12px; }
    input, button { padding: 10px; border-radius: 8px; border: 1px solid #ccc; }    button { background:#111827; color:#fff; border:0; cursor:pointer; }    .muted { color:#6b7280; }  </style>
</head>
<body>
  <h1>Contato rápido</h1>

  <form method="POST" action="resposta.php" accept-charset="UTF-8" autocomplete="on">
    <label for="email">Email</label>
    <input id="email" name="email" type="email" placeholder="voce@exemplo.com" required>

    <label for="telefone">Telefone</label>
    <input id="telefone" name="telefone" type="tel" placeholder="(11) 99999-0000" required>

    <button type="submit">Enviar</button>
    <p class="muted">Suas informações serão apenas exibidas na próxima página.</p>
  </form>
</body>
</html>