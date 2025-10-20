<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Resultados - EVP2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
  <div class="card mx-auto shadow p-4" style="max-width: 500px;">
    <h3 class="text-center text-primary mb-4">Resultados</h3>

    <?php
    $figura = $_POST['figura'] ?? '';
    $dato1 = floatval($_POST['dato1'] ?? 0);
    $dato2 = floatval($_POST['dato2'] ?? 0);

    $area = 0;
    $volumen = 'N/A';

    switch($figura){
      case 'cuadrado': $area = $dato1 * $dato1; break;
      case 'rectangulo': $area = $dato1 * $dato2; break;
      case 'triangulo': $area = ($dato1 * $dato2) / 2; break;
      case 'circulo': $area = pi() * pow($dato1, 2); break;
      case 'cubo': $area = 6 * pow($dato1, 2); $volumen = pow($dato1, 3); break;
      case 'esfera': $area = 4 * pi() * pow($dato1, 2); $volumen = (4/3) * pi() * pow($dato1, 3); break;
      default:
        echo "<div class='alert alert-danger'>Figura no válida.</div>";
        exit;
    }
    ?>

    <ul class="list-group mb-3">
      <li class="list-group-item"><strong>Figura:</strong> <?= ucfirst($figura) ?></li>
      <li class="list-group-item"><strong>Área:</strong> <?= number_format($area, 2) ?></li>
      <li class="list-group-item"><strong>Volumen:</strong> <?= is_numeric($volumen) ? number_format($volumen, 2) : $volumen ?></li>
    </ul>

    <a href="index.php" class="btn btn-secondary w-100">Volver</a>
  </div>
</div>

</body>
</html>
