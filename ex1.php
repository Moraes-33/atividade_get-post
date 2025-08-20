<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Ex1 - GET Usuário</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: system-ui, Arial; padding: 24px; }
    form { max-width: 420px; display: grid; gap: 12px; }
    input, button { padding: 10px; border-radius: 8px; border: 1px solid #ccc; }    button { background:#111827; color:#fff; border:0; cursor:pointer; }  </style>
</head>
<body>
  <h1>Informe seu nome de usuário</h1>

  <form method="GET" action="resposta.php" accept-charset="UTF-8">
    <label for="username">Nome de usuário</label>
    <input id="username" name="username" type="text" placeholder="ex: luiz123" required>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>