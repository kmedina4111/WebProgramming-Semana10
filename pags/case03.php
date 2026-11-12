<?php
    // Almacenar los meses del año usando el constructor
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    // Variable para almacenar el resultado
    $resultado = "";

    // Verificar si se presionó el botón
    if (isset($_POST['mostrarMeses'])) {
        // Recorrer el vector usando foreach
        foreach ($meses as $mes) {
            $resultado .= $mes . "<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css"> <!--dark style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.css"> <!--numeracion de la terminal-->
    <title>Caso03</title>
</head>
<style>.code-editor pre { height: 635px; overflow: auto; margin: 0; }</style>
<header class="container mt-4">
    <div class="row g-2 ">
        <h2 class="text-start mt-5 fw-bold col-sm-8">Caso 03 - Almacenar y Mostrar los Meses del Año mediante un Vector</h2>
        <div class="col-sm-4 text-end mt-5">
            <a class="btn btn-primary" href="../index.php" role="button">&#x2190; Volver a la Pag. Principal</a>
        </div>
    </div>
</header>
<body>
    <main class="container mt-5">
        <section class="card-body">
            <article class="mb-3 pt-2 pb-0">
                <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                    <strong>ENUNCIADO</strong><br>
                    Inicializar un vector con los nombres de los meses del año a través del constructor array y que se muestra el recorrido usando foreach.
                </div>
            </article>
        </section>
        <section class="row g-3 mb-5">
            <article class="col-md-8">
                <div class="card border-secondary rounded-3 shadow-sm code-editor overflow-hidden">
                    <h2 class="card-header bg-primary-subtle fw-bold py-2 fs-6 mb-0">Visualizador de Codigo - PHP</h2>
                    <div class="card-body bg-dark p-0 rounded-bottom"> <!--vistor de codigo-->
                        <pre class="line-numbers language-php"><code class="language-php">&lt;?php
// Almacenar los meses del año usando el constructor array()
$meses = array("Enero", 
                "Febrero", 
                "Marzo",
                "Abril", 
                "Mayo", 
                "Junio", 
                "Julio", 
                "Agosto", 
                "Septiembre", 
                "Octubre", 
                "Noviembre", 
                "Diciembre");

// Variable para almacenar el resultado
$resultado = "";

// Recorrer el vector usando foreach
foreach ($meses as $mes) {
    $resultado .= $mes . "<br>";
}
?&gt;</code></pre>
                    </div>
                </div>
            </article>
            <article class="col-md-4">
                <div class="card border-secondary rounded-3 shadow-sm">
                    <h2 class="card-header fw-bold py-2 fs-6 mb-0">Area de Resultado</h2>
                    <div class="card-body">
                        <form method="POST" class="pb-2"> 
                            <div class="pb-2">
                                <!-- Formulario 01-->
                                <form method="post">
                                    <label class="form-label fw-bold fs-5">Meses del Año</label><br>
                                    <label class="form-label pb-2"><i>Muestra los meses almacenados en un vector usando foreach.</i></label><br>
                                    <!-- Area para mostrar el resultado -->
                                    <div class="mt-3">
                                        <label class="form-label fw-bold">Meses almacenados:</label>
                                        <div class="form-control">
                                            <?= $resultado ?>
                                        </div>
                                    </div>
                                    <!-- Botón para ejecutar el recorrido -->
                                    <button type="submit" name="mostrarMeses" class="btn btn-primary mt-3 w-100">Mostrar Meses</button>
                                </form>
                        </form><hr>
                        <form method="POST" class="text-end mt-4">
                            <button type="submit" name="limpiar" class="btn btn-outline-secondary">&#x27F2; Limpiar todo</button>
                        </form>
                    </div>
                </div>
            </article>
                <div class="text-center" style="padding-top: 20px;">
                    <a class="btn btn-primary w-50 py-2" href="apps/app_case02.php" role="button">Acceder a la Aplicacion</a>
                </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <!-- sintaxis para php -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
    <!-- numeracion de la terminal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
</body>
</html>