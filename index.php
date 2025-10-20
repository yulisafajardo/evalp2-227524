<?php session_start();
if(isset($_SESSION['user'])) header("Location: dashboard.php");
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Login - Evaluación Práctica 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

  <div class="card shadow-lg p-4" style="width: 22rem;">
    <h4 class="text-center mb-3 text-primary">Inicio de Sesión</h4>

    <?php if(isset($_GET['err'])): ?>
      <div class="alert alert-danger py-2 text-center"><?= htmlspecialchars($_GET['err']) ?></div>
    <?php endif; ?>

    <form action="login.php" method="post">
      <div class="mb-3">
        <label class="form-label">Usuario</label>
        <input type="text" name="user" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Contraseña</label>
        <input type="password" name="pass" class="form-control" required>
      </div>
      <button class="btn btn-primary w-100">Entrar</button>
    </form>
  </div>

</body>
</html>
