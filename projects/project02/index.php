<?php
    // Importa los archivos del sistema
    require_once __DIR__ . "/config/app.php"; // Se usa DIR para obtener la ruta absoluta, ya que tenia errores visuales (me marcaba las vars como erroneas).
    require_once __DIR__ . "/lib/planilla.php";

    // Obtiene el empleado seleccionado
    $legajo = $_GET["legajo"] ?? "";

    // Busca los datos del empleado
    $empleado = null;
    $afp = 0;
    $bonificacion = 0;
    $sueldoNeto = 0;

    // Calcula la planilla del empleado
    if ($legajo !== "") {
        $empleado = buscarEmpleado($empleados, $legajo);

        if ($empleado !== null) {
            $afp = calcularAFP($empleado["sueldo"]);
            $bonificacion = calcularBonificacion($empleado["sueldo"], $empleado["profesion"]);
            $sueldoNeto = calcularSueldoNeto($empleado["sueldo"], $afp, $bonificacion);
        }
    }
    // Cuenta los empleados registrados
    $cantidad = count($empleados);
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
        <section class="card border-secondary rounded-3 shadow-sm">
            <h2 class="card-header bg-primary-subtle fw-bold py-2 fs-5">PROYECTO 02 - Gestion de Planilla</h2>
            <article class="card-body">
                <div class="mb-4 pt-2">
                    <h5 class="fw-bold mb-3">Planilla de Empleados</h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        Consulta los empleados registrados, calcula los descuentos AFP, las bonificaciones y el sueldo neto
                    </div>
                </div>
                <!-- Resumen de planilla -->
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="card border-secondary rounded-3 h-100">
                            <div class="card-header bg-primary-subtle fw-bold">Total de Empleados</div>
                            <div class="card-body">
                                <h3 class="fw-bold mb-0"><?= $cantidad ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-secondary rounded-3 h-100">
                            <div class="card-header bg-primary-subtle fw-bold">Descuento AFP</div>
                            <div class="card-body">
                                <h3 class="fw-bold mb-0"><?= AFP * 100 ?>%</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-secondary rounded-3 h-100">
                            <div class="card-header bg-primary-subtle fw-bold">Bonificacion</div>
                            <div class="card-body">
                                <h3 class="fw-bold mb-0"><?= BONIFICACION * 100 ?>%</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Formulario de empleados -->
                <div class="mb-4">
                    <h5 class="fw-bold mb-3">Consulta de Empleados</h5>
                    <form method="get">
                        <label for="legajo" class="form-label fw-bold">Selecciona un empleado</label>
                        <select id="legajo" name="legajo" class="form-select" required>
                            <option value="">Selecciona un empleado</option>
                            <?php foreach ($empleados as $item) { ?>
                                <option value="<?= $item["legajo"] ?>" <?= $legajo == $item["legajo"] ? "selected" : "" ?>><?= htmlspecialchars($item["nombre"]) ?> - <?= $item["legajo"] ?></option>
                            <?php } ?>
                        </select>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Calcula Planilla</button>
                    </form>
                </div>
                <!-- Boleta de pago -->
                <div class="mb-4">
                    <h5 class="fw-bold mb-3">Boleta de Pago</h5>
                    <?php if ($empleado !== null) { ?>
                        <div class="card border-secondary rounded-3">
                            <div class="card-header bg-primary-subtle fw-bold">Datos del Empleado</div>
                            <div class="card-body">
                                <!-- Info personal -->
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label class="fw-bold">Legajo</label>
                                        <div><?= $empleado["legajo"] ?></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fw-bold">Nombre</label>
                                        <div><?= htmlspecialchars($empleado["nombre"]) ?></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fw-bold">DNI</label>
                                        <div><?= htmlspecialchars($empleado["dni"]) ?></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fw-bold">Profesion</label>
                                        <div><?= htmlspecialchars($empleado["profesion"]) ?></div>
                                    </div>
                                </div>
                                <!-- Detalle de sueldo -->
                                <h5 class="fw-bold mb-3">Detalle de Remuneracion</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>Concepto</th>
                                                <th>Importe</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sueldo Base</td>
                                                <td><?= $moneda ?> <?= number_format($empleado["sueldo"], 2) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Descuento AFP (10%)</td>
                                                <td>- <?= $moneda ?> <?= number_format($afp, 2) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Bonificacion por Profesion</td>
                                                <td>+ <?= $moneda ?> <?= number_format($bonificacion, 2) ?></td>
                                            </tr>
                                            <tr class="table-primary fw-bold">
                                                <td>Sueldo Neto</td>
                                                <td><?= $moneda ?> <?= number_format($sueldoNeto, 2) ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <!-- Mensaje sin empleado seleccionado -->
                        <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-3">
                            <?php if ($legajo === "") { ?>
                                Selecciona un empleado y presiona el boton para conocer su boleta de pago
                            <?php } else { ?>
                                No se encuentra el empleado seleccionado
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <!-- Lista general de empleados -->
                <div class="mb-3">
                    <h5 class="fw-bold mb-3">Lista de Empleados</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>Legajo</th>
                                    <th>Nombre</th>
                                    <th>DNI</th>
                                    <th>Profesion</th>
                                    <th>Sueldo Base</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($empleados as $item) { ?>
                                    <tr>
                                        <td><?= $item["legajo"] ?></td>
                                        <td><?= htmlspecialchars($item["nombre"]) ?></td>
                                        <td><?= htmlspecialchars($item["dni"]) ?></td>
                                        <td><?= htmlspecialchars($item["profesion"]) ?></td>
                                        <td><?= $moneda ?> <?= number_format($item["sueldo"], 2) ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Empleados registrados:</strong> <?= count($empleados) ?>
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
