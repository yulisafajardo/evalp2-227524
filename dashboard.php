<?php session_start();
if(!isset($_SESSION['user'])) header("Location: index.php");
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Panel principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand">Panel del Sistema</span>
      <div class="d-flex">
        <span class="navbar-text me-3">Usuario: <?= htmlspecialchars($_SESSION['user']) ?></span>
        <a href="logout.php" class="btn btn-light btn-sm">Cerrar sesión</a>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="card shadow-sm p-4 text-center">
      <h3 class="text-success">¡Bienvenido <?= htmlspecialchars($_SESSION['user']) ?>!</h3>
      <p class="mt-3">Has ingresado correctamente al sistema.</p>
    </div>
  </div>

</body>
</html>
