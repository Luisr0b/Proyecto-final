@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<h1>Detalle de empleado</h1>
    <ul>
        <li>
            Nombre completo: {{ $empleado->nomb_empleado}}
        </li>
        <li>
            Nombre corto: {{ $empleado->nomb_corto}}
        </li>
        <li>
            Correo electronico: {{ $empleado->correo}}
        </li>
        <li>
            Numero de nomina: {{ $empleado->n_nomina}}
        </li>
        <li>
            Puesto: {{ $empleado->puesto}}
        </li>
        <li>
            Departamento: {{ $empleado->departamento}}
        </li>
        <li>
            Fecha de ingreso: {{ $empleado->fecha_ingreso}}
        </li>
    </ul>
    <a href="/empleado/{{ $empleado->id }}/edit"><button>Editar</button></a>
    <br><br>
    <form action="{{ route('empleado.destroy', $empleado) }} " method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar</button>
    </form>
    <br>
    <a href="/empleado"><button>Regresar</button></a>
@endsection