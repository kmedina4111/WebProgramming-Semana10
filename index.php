<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>WP - Semana 10</title>
</head>
<header>
    <h1 class="text-center mt-5 fw-bold">MENÚ PRINCIPAL - ARREGLOS ACT</h1>
</header>
<body>
    <main class="container mt-4">
        <section class="card border-secondary rounded-3 shadow-sm">
            <h2 class="card-header bg-primary-subtle fw-bold py-2 fs-5">Resolucion de Ejercicios - Semana 10</h2>
            <article class="card-body">
                <div class="mb-3 pt-2">
                    <h5 class="fw-bold mb-3"> CASO 01: <a href="pags/case01.php">Almacenar y Mostrar los Días de la Semana mediante un Vector</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado Detallado: </strong>
                        Almacenar los nombres de los días de la semana en un vector (inicialice índice con 0) y luego imprimirlos uno debajo de otro, realice este recorrido usando for y la función count.
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> CASO 02: <a href="pags/case02.php">Almacenar y Mostrar los Países de Sudamérica mediante un Vector</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                         Almacenar los nombres de los países de sudamérica en un vector (sin colocar el número de índice) y luego imprimirlos uno debajo de otro, realice este recorrido usando foreach.
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> CASO 03: <a href="pags/case03.php">Almacenar y Mostrar los Meses del Año mediante un Vector</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Inicializar un vector con los nombres de los meses del año a través del constructor array y que se muestra el recorrido usando foreach.
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> CASO 04: <a href="pags/case04.php">Almacenar y Contar Artículos de Librería mediante un Vector</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Cargar en un vector artículos("Lápiz","Goma","Hoja","Tinta") de librería y luego imprimir la cantidad de ellos. Use el constructor array
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> CASO 05: <a href="pags/case05.php">Almacenar y Mostrar los Datos Personales de un Empleado mediante un Vector</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Desarrollar un programa que almacene los datos personales de un empleado en un vector, incluyendo legajo (4371), nombre (Martínez Leandro), DNI (27643742), sueldo (1429.54) y profesión (Arquitecto). Posteriormente, recorrer el vector para mostrar la información del empleado en pantalla de manera ordenada.
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> PROYECTO 01: <a href="projects/project01/index.php">Portal de Gestión de Inventario "Librería San Cristóbal"</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Desarrollar una solución web modular con Bootstrap 5 y PHP 8 que procese un catálogo de productos de librería almacenado en un arreglo asociativo multidimensional. El sistema debe calcular el total de artículos con count(), determinar el valor total del inventario y permitir filtrar productos mediante formulario. <br>
                        <strong><i>Estructura Modular</i></strong><br>
                        <ul>
                            <li>config/app.php: Nombre del sistema y moneda.</li>
                            <li>lib/inventario.php: Arreglos asociativos y funciones de cálculo.</li>
                            <li>index.php: Interfaz gráfica Bootstrap 5.</li>
                        </ul>
                    </div>
                </div>
            </article>
            <article class="card-body">
                <div class="mb-3">
                    <h5 class="fw-bold mb-3"> PROYECTO 02: <a href="projects/project02/index.php">Sistema de Planilla de Empleados y Liquidación de Sueldos</a></h5>
                    <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                        <strong>Enunciado detallado:</strong>
                        Crear un sistema web interactivo en PHP 8 y Bootstrap 5 para la gestión de planilla de empleados. El sistema cargará los empleados en un arreglo multidimensional asociativo (Legajo, Nombre, DNI, Sueldo Base y Profesión). Permitirá calcular el aporte a la AFP (10%), la bonificación por profesión (5% si es Arquitecto u Ingeniero) y mostrar la boleta de pago neta.<br>
                        <strong><i>Estructura Modular</i></strong><br>
                        <ul>
                            <li>cconfig/app.php: Constantes de porcentaje.</li>
                            <li>lib/planilla.php: Funciones de procesamiento de sueldo.</li>
                            <li>index.php: Vista interactiva de la planilla.</li>
                        </ul>
                    </div>
                </div>
            </article>
        </section>
        <section class="card border-secondary rounded-3 shadow-sm mt-3 mb-3">
            <article class="card-body py-3">
                <div class="row g-3 justify-content-center text-center">
                    <div class="col-md-4">
                        <strong>Apellidos y Nombres</strong>
                        <p class="mb-0">Medina Huarhuachi, Kevin</p>
                    </div>
                    <div class="col-md-4">
                        <strong>Semestre</strong>
                        <p class="mb-0">IV Semestre</p>
                    </div>
                    <div class="col-md-4">
                        <strong>Turno</strong>
                        <p class="mb-0">Tarde</p>
                    </div>
                </div>
            </article>
        </section>
    </main>
</body>
</html>