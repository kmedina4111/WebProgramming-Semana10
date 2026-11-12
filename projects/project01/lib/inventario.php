<?php
    // Catalogo de productos
    $productos = [
        ["nombre" => "Lapiz", "categoria" => "Escritura", "precio" => 1.50, "stock" => 20],
        ["nombre" => "Goma", "categoria" => "Accesorios", "precio" => 2.00, "stock" => 15],
        ["nombre" => "Hoja", "categoria" => "Papeleria", "precio" => 0.50, "stock" => 100],
        ["nombre" => "Tinta", "categoria" => "Escritura", "precio" => 15.00, "stock" => 10]
    ];

    // Calcula el valor total del inventario
    function calcularTotal($productos) {
        $total = 0;
        foreach ($productos as $producto) {
            $total += $producto["precio"] * $producto["stock"];
        }
        return $total;
    }

    // Filtra productos por categoria
    function filtrarProductos($productos, $categoria) {
        if ($categoria == "Todos") {
            return $productos;
        }
        $resultado = [];
        foreach ($productos as $producto) {
            if ($producto["categoria"] == $categoria) {
                $resultado[] = $producto;
            }
        }
        return $resultado;
    }
?>
