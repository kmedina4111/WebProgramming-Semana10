<?php
    // Importa los archivos
    require_once "config/app.php"; // Faltaria agrega la cosntante __DIR__ para obtener la ruta absoluta como partwe de buenas practicas
    require_once "lib/inventario.php";

    // Obtiene el filtro seleccionado
    $categoria = $_GET["categoria"] ?? "Todos";

    // Filtra el catalogo
    $productosFiltrados = filtrarProductos($productos, $categoria);

    // Calcula los resultados
    $cantidad = count($productos);
    $total = calcularTotal($productos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title><?= htmlspecialchars($nombreSistema) ?></title>
</head>
<body>
    <header>
        <h1 class="text-center mt-5 fw-bold"><?= htmlspecialchars($nombreSistema) ?></h1>
    </header>
    <main class="container mt-4">
        <section class="card border-secondary rounded-3 shadow-sm mb-5">
            <h2 class="card-header bg-primary-subtle fw-bold py-2 fs-5">PROYECTO 01 - Gestion de Inventario</h2>
            <article class="card-body">
                <div class="mb-4 pt-2">
                    <h5 class="fw-bold mb-3">Catalogo de Productos de Libreria</h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        Consulta los productos registrados, revisa el valor total del inventario y filtra los articulos por categoria
                    </div>
                </div>
                <!-- Resumen del inventario -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="card border-secondary rounded-3 h-100">
                            <div class="card-header bg-primary-subtle fw-bold">Total de Productos</div>
                            <div class="card-body">
                                <h3 class="fw-bold mb-0"><?= $cantidad ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-secondary rounded-3 h-100">
                            <div class="card-header bg-primary-subtle fw-bold">Valor del Inventario</div>
                            <div class="card-body">
                                <h3 class="fw-bold mb-0"><?= htmlspecialchars($moneda) ?> <?= number_format($total, 2) ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Formulario de filtro -->
                <div class="mb-4">
                    <h5 class="fw-bold mb-3">Filtro de Productos</h5>
                    <form method="get">
                        <label for="categoria" class="form-label fw-bold">Categoria del producto</label>
                        <select id="categoria" name="categoria" class="form-select">
                            <?php foreach (["Todos", "Escritura", "Accesorios", "Papeleria"] as $opcion) { ?>
                                <option value="<?= $opcion ?>" <?= $categoria == $opcion ? "selected" : "" ?>><?= $opcion ?></option>
                            <?php } ?>
                        </select>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Filtra Productos</button>
                    </form>
                </div>
                <!-- Tabla del inventario -->
                <div class="mb-3">
                    <h5 class="fw-bold mb-3">Lista de Productos</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>Producto</th>
                                    <th>Categoria</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($productosFiltrados as $producto) { ?>
                                    <tr>
                                        <td><?= htmlspecialchars($producto["nombre"]) ?></td>
                                        <td><?= htmlspecialchars($producto["categoria"]) ?></td>
                                        <td><?= htmlspecialchars($moneda) ?> <?= number_format($producto["precio"], 2) ?></td>
                                        <td><?= $producto["stock"] ?></td>
                                        <td><?= htmlspecialchars($moneda) ?> <?= number_format($producto["precio"] * $producto["stock"], 2) ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Productos encontrados:</strong> <?= count($productosFiltrados) ?>
                    </div>
                </div>
            </article>
        </section>
        <section class="mt-4 mb-4"> <!-- Se agrega mb-4 para dejar espacio al final de la pagina y que el desplazamiento con el touchpad se sienta mas natural -->
            <div class="d-flex justify-content-center gap-3"> <!-- d-flex coloca los botones horizontalmente --> 
                <a class="btn btn-primary w-25" href="../../apps/app_case01.php" role="button">Acceder a la Aplicacion</a>
                <a class="btn btn-primary w-25" href="../../index.php" role="button">Regresar al Menu</a>
            </div>
        </section>
    </main>
</body>
</html>
