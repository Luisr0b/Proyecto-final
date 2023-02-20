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

    @if(is_null($empleado))
        <ul>
            @foreach ($empleados as $empleado)
                <li>{{ $empleado['nombre'] }} - {{ $empleado['correo'] }} - {{ $empleado['n-nomina'] }}</li>
            @endforeach
        </ul>
    @else
    <h1>{{ $empleado['nombre']}}</h1>

    <h2>{{ $empleado['correo']}}</h2>

    <h2>{{ $empleado['n-nomina']}}</h2>
    @endif
</body>
</html>