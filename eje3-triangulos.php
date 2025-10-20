<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

$errors = [];
$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['lado_a'] ?? '';
    $b = $_POST['lado_b'] ?? '';
    $c = $_POST['lado_c'] ?? '';

    if ($a === '' || $b === '' || $c === '') {
        $errors[] = "Debe ingresar los tres lados.";
    } elseif (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
        $errors[] = "Todos los valores deben ser numéricos.";
    } elseif ($a <= 0 || $b <= 0 || $c <= 0) {
        $errors[] = "Los lados deben ser positivos.";
    } elseif (!($a + $b > $c && $a + $c > $b && $b + $c > $a)) {
        $errors[] = "Los lados no cumplen la desigualdad triangular.";
    } else {
        if ($a == $b && $b == $c) {
            $result = "Equilátero";
        } elseif ($a == $b || $a == $c || $b == $c) {
            $result = "Isósceles";
        } else {
            $result = "Escaleno";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 3 - Triángulos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
    <a href="dashboard.php" class="btn btn-link">&larr; Volver</a>
    <h3>Clasificación de Triángulos</h3>

    <?php if ($errors): ?>
    <div class="alert alert-danger">
        <ul>
        <?php foreach ($errors as $e): ?><li><?= htmlspecialchars($e) ?></li><?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>

    <form method="post" class="card p-3 shadow-sm">
        <div class="mb-2">
            <label>Lado A</label>
            <input name="lado_a" type="number" step="any" min="0" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Lado B</label>
            <input name="lado_b" type="number" step="any" min="0" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Lado C</label>
            <input name="lado_c" type="number" step="any" min="0" class="form-control" required>
        </div>
        <button class="btn btn-primary">Clasificar</button>
    </form>

    <?php if ($result): ?>
    <div class="alert alert-success mt-3">
        <strong>Resultado:</strong> El triángulo es <b><?= $result ?></b>.
    </div>
    <?php endif; ?>
</div>
</body>
</html>
