<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Empleados</title>
</head>
<body>
    <h1>Agregar empleado</h1>
        <form action="/empleado" method="POST">
            @csrf
            <label for="nomb_completo">Nombre completo</label><br>
            <input type="text" name="nomb_completo" id="nomb_completo" required><br>
            @error('nomb_completo')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>
            <label for="nomb_corto">Nombre corto</label><br>
            <input type="text" name="nomb_corto" id="nomb_corto" required><br>
            @error('nomb_corto')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>
            <label for="correo">Correo electronico</label><br>
            <input type="text" name="correo" id="correo"><br>
            @error('correo')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>
            <label for="n_nomina">Numero de nomina</label><br>
            <input type="number" name="n_nomina" id="n_nomina"><br>
            @error('n_nomina')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>
            <label for="puesto">Puesto</label><br>
            <input type="text" name="puesto" id="puesto"><br>
            @error('puesto')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>
            <label for="departamento">Departamento</label><br>
            <select name="departamento" id="departamento">
                <option selected>Seleccionar departamento</option>
                <option value="Sistemas">Sistemas</option>
                <option value="Ventas">Ventas</option>
                <option value="Marketing">Marketing</option>
                <option value="Almacen">Almacen</option>
                <option value="Produccion">Produccion</option>
            </select>
            @error('departamento')
                <h5>{{$meesage }}</h5>
            @enderror
            <br>
            <br>
            <input type="submit" value="Enviar">
            <br>
            <a href="/empleado">Regresar</a>
        </form>
</body>
</html>