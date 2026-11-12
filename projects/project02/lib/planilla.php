<?php
    // Arreglo multidimensional de empleados
    // Se agrega el nombre de la caetegoria para no equivocarme al colocar directamente la poscision del elemento del arreglo 
    $empleados = [
        ["legajo" => 4371, "nombre" => "Martinez Leandro", "dni" => "27643742", "sueldo" => 1429.54, "profesion" => "Arquitecto"],
        ["legajo" => 4372, "nombre" => "Carlos Ramirez", "dni" => "45678912", "sueldo" => 1800.00, "profesion" => "Ingeniero"],
        ["legajo" => 4373, "nombre" => "Ana Torres", "dni" => "76543218", "sueldo" => 1500.00, "profesion" => "Contador"],
        ["legajo" => 4374, "nombre" => "Luis Perez", "dni" => "48561239", "sueldo" => 1600.00, "profesion" => "Administrador"]
    ];

    // Calcula el descuento AFP
    function calcularAFP($sueldo) {
        return round($sueldo * AFP, 2);
    }

    // Calcula la bonificacion por profesion
    function calcularBonificacion($sueldo, $profesion) {
        if ($profesion == "Arquitecto" || $profesion == "Ingeniero") {
            return round($sueldo * BONIFICACION, 2);
        }
        return 0;
    }

    // Calcula el sueldo neto
    function calcularSueldoNeto($sueldo, $afp, $bonificacion) {
        return round($sueldo - $afp + $bonificacion, 2);
    }

    // Busca un empleado por legajo
    function buscarEmpleado($empleados, $legajo) {
        foreach ($empleados as $empleado) {
            if ($empleado["legajo"] == $legajo) {
                return $empleado;
            }
        }
        return null;
    }
?>
