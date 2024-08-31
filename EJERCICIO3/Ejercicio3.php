<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Ejercicio 3 Juan camilo salazar hernández </title>
    <link rel="stylesheet" href="estilo3.css">
</head>
<body>
    <h1> Productos </h1>

    <?php

        $productos = [
            "gaseosa" => [
            "nombre" => "Pepsi",
            "precio" => 5000,
            "detalles" => [
            "disponibilidad" => "si",
            "reseñas" => " disponibles en tiendas de mercado " 
            ],
            ],

            "platanitos" => [
            "nombre" => "maduros",
            "precio" => 2000,
            "detalles" => [
            "disponibilidad" => "no",
            "reseñas" => " No estan disponibles " 
            ],
            ],

            "frijoles" => [
            "nombre" => "frijol cargamanto",
            "precio" => 3000,
            "detalles" => [
            "disponibilidad" => "si",
            "reseñas" => " disponibles en tiendas de mercado " 
            ],
            ],

            "manzanas" => [
            "nombre" => "manzanas rojas",
            "precio" => 1000,
            "detalles" => [
            "disponibilidad" => "no",
            "reseñas" => " No estan disponibles " 
            ],
            ],

            "aceite" => [
            "nombre" => "aceite de girasol",
            "precio" => 10000,
            "detalles" => [
            "disponibilidad" => "si",
            "reseñas" => " disponibles en tiendas de mercado "  
            ],
            ]
        ];
        
        // con este foreach podemos ver los productos que si estan disponibles
        foreach ($productos as $producto) {
            if ($producto['detalles']['disponibilidad'] == 'si') {
                echo "<h2>Nombre: " . $producto['nombre'] . "</h2>";
                echo "<p>Precio: " . $producto['precio'] . "</p><hr>";
            }
        }

    ?>
    
</body>
</html>