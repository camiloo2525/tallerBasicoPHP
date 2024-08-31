<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicio 2 Juan camilo salazar hernández</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
    <h1> Informacion de los empleados </h1>
    <?php
    // Arreglo de los empleados

        $empleados = [
            "Pepito" => [
            "salario" => 1500000,
            "fechaContratacion" => "15-05-2020",
            "departamento" => "comercial"
            ],
            
            "susana" => [
            "salario" => 1000000,
            "fechaContratacion" => "01-01-2021",
            "departamento" => "administrativo"
            ],
            
            "Luis" => [
            "salario" => 2000000,
            "fechaContratacion" => "25-07-2020",
            "departamento" => "finanzas"
            ]
        ];
        
        // con este foreach podemos ver los empleados con sus respectivos salarios
        foreach ($empleados as $empleado => $salarios){
            echo "<h2>Empleado: $empleado</h2>";
            echo "<p>Salario: " . $salarios['salario'] . "</p><hr>";
        }
    ?>
</body>
</html>