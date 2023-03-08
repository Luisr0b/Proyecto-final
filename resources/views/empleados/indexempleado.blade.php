<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <h1>Empleados</h1>

    <a href="empleado/create"><button>Agregar empleado</button></a>

        <ul>
            @foreach ($empleados as $empleado)
                <li>{{ $empleado['nomb_completo'] }} - {{ $empleado['nomb_corto'] }} - {{ $empleado['correo'] }} - {{ $empleado['n_nomina'] }} - {{ $empleado['puesto'] }} - {{ $empleado['departamento'] }} - {{ $empleado['fecha_ingreso'] }} <a href="empleado/{{ $empleado->id }}"><button>Detalles</button></a></li>
            @endforeach

        </ul>

</body>
</html>