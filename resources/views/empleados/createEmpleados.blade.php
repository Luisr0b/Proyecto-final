<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Empleados</title>
</head>
<body>
    <h1>Agregar empleado</h1>
        <form action="/producto" method="POST">
            @csrf
            <label for="nombre">Nombre del empleado</label><br>
            <input type="text" name="nombre" id="nombre" required><br>
            @error('nombre')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>
            <label for="correo">Correo electronico</label><br>
            <input type="text" name="correo" id="correo"><br>
            @error('correo')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>
            <label for="n-nomina">Numero de nomina</label><br>
            <input type="text" name="n-nomina" id="n-nomina"><br>
            @error('n-nomina')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>
            <input type="submit" value="Enviar">
        </form>
</body>
</html>