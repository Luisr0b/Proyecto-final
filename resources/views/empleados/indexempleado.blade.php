<?php
    $conexion=mysqli_connect('localhost','root','','tracto-int');
?>

@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
@endsection
 
@section('content')
    <br><br><br><br>
    <h1>Empleados</h1>

    <a href="empleado/create"><button>Agregar empleado</button></a><br><br>

    <table class="table table-bordered border-1">
        <tr>
            <td>ID</td>
            <td>Nombre completo</td>
            <td>Nombre corto</td>
            <td>Correo electronico</td>
            <td>Numero de nomina</td>
            <td>Puesto</td>
            <td>Departamento</td>
            <td>Fecha de ingreso</td>
            <td>Detalles</td>
        </tr>

        <?php
        $sql="SELECT * from empleados";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            ?>
            
        <tr>
            <td><?php echo $mostrar['id'] ?></td>
            <td><?php echo $mostrar['nomb_completo'] ?></td>
            <td><?php echo $mostrar['nomb_corto'] ?></td>
            <td><?php echo $mostrar['correo'] ?></td>
            <td><?php echo $mostrar['n_nomina'] ?></td>
            <td><?php echo $mostrar['puesto'] ?></td>
            <td><?php echo $mostrar['departamento'] ?></td>
            <td><?php echo $mostrar['fecha_ingreso'] ?></td>  
        </tr>
        <?php
        }
        ?>
        
    </table>
        <ul>
            @foreach ($empleados as $empleado)
                <li>{{ $empleado['nomb_completo'] }} - {{ $empleado['nomb_corto'] }} - {{ $empleado['correo'] }} - {{ $empleado['n_nomina'] }} - {{ $empleado['puesto'] }} - {{ $empleado['departamento'] }} - {{ $empleado['fecha_ingreso'] }} <a href="empleado/{{ $empleado->id }}"><button>Detalles</button></a></li>
            @endforeach

        </ul>
@endsection
