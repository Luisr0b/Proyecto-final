@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <br>
@endsection
 
@section('content')
<br><br><br>
<h1>Detalle de tecnico</h1>
    <ul>
        <li>
            Nombre completo: {{ $tecnico->nomb_completo}}
        </li>
        <li>
            Nombre corto: {{ $tecnico->nomb_corto}}
        </li>
    </ul>
    <a href="/tecnico/{{ $tecnico->id }}/edit"><button>Editar</button></a>
    <br><br>
    <form action="{{ route('tecnico.destroy', $tecnico) }} " method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar</button>
    </form>
    <br>
    <a href="/tecnico"><button>Regresar</button></a>
@endsection