<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contacto</h1>
    <form action="contacto" method="POST">
        @csrf
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre" required><br>
        @error('nombre')
            <h5>{{$meesage }}</h5>
        @enderror
        <br>
        <label for="codigo">Código</label><br>
        <input type="text" name="codigo" id="codigo"><br>
        @error('codigo')
            <h5>{{$meesage }}</h5>
        @enderror
        <input type="submit" value="Enviar">
    </form>
</body>
</html>