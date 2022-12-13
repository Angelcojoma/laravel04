@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">Pagina de Actualizar</h1>
@endsection

@section('seccion')
    <h3>Detalle Estudiante</h3>
    @if(session('msj'))
       <div class="alert alert-success">
           {{ session('msj')}}
    </div>
    @endif
<form action="{{ route('Estudiante.xUpdate', $xActAlumnos->id) }}" method="post" class="d-grid pag-2">
    @method('PUT')
    @csrf

    @error('codEst')
      <div class="alert alert-danger">
           El codigo es requerido
      </div>
    @enderror

    @error('nomEst')
      <div class="alert alert-danger">
           El nombre es requerido
      </div>
    @enderror

    @if($errors ->has('apeEst'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
           El <strong>apellido</strong> es requerido
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

  <input type="text" name="codEst" placeholder="Código" value="{{ $xActAlumnos->codEst}}" class="form-control mb-2"> 
  <input type="text" name="nomEst" placeholder="Nombres" value="{{ $xActAlumnos->nomEst}}" class="form-control mb-2">
  <input type="text" name="apeEst" placeholder="Apellidos" value="{{ $xActAlumnos->apeEst}}" class="form-control mb-2">
  <input type="text" name="fnaEst" placeholder="Fecha de Nacimiento" value="{{ $xActAlumnos->fnaEst}}" class="form-control mb-2">
  <select name="turMat" class="form-control mb-2">
      <option value="">Seleccione...</option>
      <option value="1" @if ($xActAlumnos->turMat == 1) {{ "SELECTED" }} @endif>Turno dia(1)</option>
      <option value="2" @if ($xActAlumnos->turMat == 2) {{ "SELECTED" }} @endif>Turno noche(2)</option>
      <option value="3" @if ($xActAlumnos->turMat == 3) {{ "SELECTED" }} @endif>Turno tarde(3)</option>
  </select>
  <select name="senMat" class="form-control mb-2">
      <option value="">Seleccione..</option>
      @for($i=1; $i < 7; $i++)
      <option value="{{$i}}" @if ($xActAlumnos->senMat == $i) {{ "SELECTED" }}  @endif>Semestre {{$i}}</option>
      @endfor
  </select>
  <select name="estMat" class="form-control mb-2">
    <option value="">Seleccione..</option>
    <option value="1" @if ($xActAlumnos->estMat == 1) {{ "SELECTED" }} @endif>Activo</option>
    <option value="0" @if ($xActAlumnos->estMat == 0) {{ "SELECTED" }} @endif>Inactivo</option>
    
  </select>
  <button class="btn btn-primary" type="submit">Actualizar</button>
  </form>
@endsection