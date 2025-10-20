<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Figuras - EVP2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
  <div class="card mx-auto shadow p-4" style="max-width: 500px;">
    <h3 class="text-center text-primary mb-4">Cálculo de Área y Volumen</h3>

    <form action="calcular.php" method="post">
      <div class="mb-3">
        <label class="form-label">Selecciona una figura:</label>
        <select name="figura" class="form-select" required>
          <option value="">-- Elige una --</option>
          <option value="cuadrado">Cuadrado</option>
          <option value="rectangulo">Rectángulo</option>
          <option value="triangulo">Triángulo</option>
          <option value="circulo">Círculo</option>
          <option value="cubo">Cubo</option>
          <option value="esfera">Esfera</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Medida 1 (base o radio):</label>
        <input type="number" name="dato1" step="0.01" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Medida 2 (altura o profundidad):</label>
        <input type="number" name="dato2" step="0.01" class="form-control">
        <div class="form-text">Si la figura no requiere segunda medida, déjala en blanco.</div>
      </div>

      <button class="btn btn-success w-100">Calcular</button>
    </form>
  </div>
</div>

</body>
</html>
