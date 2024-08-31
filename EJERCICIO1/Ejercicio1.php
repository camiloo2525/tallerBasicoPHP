<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicio 1 Juan camilo salazar hernández </title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    <h1>Promedio de calificaciones de los estudiantes</h1>
    <?php
        // arreglo $estudiantes

        $estudiantes = [
            "camilo" => [
                "matematicas" => 5.0,
                "sociales" => 4.0,
                "religion" => 3.0,
                "castellano" => 4.0
            ],
            "juan" => [
                "matematicas" => 3.0,
                "sociales" => 5.0,
                "religion" => 4.0,
                "castellano" => 3.0
            ],
            "maria" => [
                "matematicas" => 4.0,
                "sociales" => 3.0,
                "religion" => 5.0,
                "castellano" => 3.0
            ]
        ];

        $promedio = [];

        foreach ($estudiantes as $estudiante => $calificaciones){

            // array_sum es una funcion en php que se utiliza para la suma de todos los valores
            $totalCalificaciones = array_sum($calificaciones);

            //  contar el numero de notas
            $cantidadNotas = count($calificaciones);

            // promedio
            $promedios = $totalCalificaciones / $cantidadNotas;

            // aca almacenamos el promedio del arreglo
            $promedio[$estudiante] = $promedios;

            // calificaciones y promedio de cada estudiante

            echo "<h3> las notas de $estudiante: </h3>";
            foreach ($calificaciones as $materia => $nota) {
                echo "<p>Materia: $materia: $nota</p>";
            }
            echo "<p>Promedio: $promedios</p><hr>";
        }

        // promedio mas alto

        $promedioMaximo = max($promedio);

        // estudiante con el promedio mas alto

        $estudianteConPromedioMaximo = array_search($promedioMaximo, $promedio);

        echo "<h2> El estudiante con el promedio mas alto es: " . $estudianteConPromedioMaximo . " con el promedio de: " . $promedioMaximo . "</h2>";


    ?>
</body>
</html>