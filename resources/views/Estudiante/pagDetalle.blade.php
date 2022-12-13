@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">Pagina de lista</h1>
@endsection

@section('seccion')
    <h3>Detalle Estudiante</h3>
    <p>Id:                      {{$xDetAlumnos->id}}</p>
    <p>Codigo:                  {{$xDetAlumnos->codEst}}</p>
    <p>Apellidos y Nombres:     {{$xDetAlumnos->apeEst}}, {{$xDetAlumnos->nomEst}}</p>
    <p>Fecha de Nacimiento:     {{$xDetAlumnos->fnaEst}}</p>
    <p>Turno:                   {{$xDetAlumnos->turMat}}</p>
    <p>Semestre:                {{$xDetAlumnos->senMat}}</p>
    <p>Estado de Matricula:     {{$xDetAlumnos->estMat}}</p>
@endsection