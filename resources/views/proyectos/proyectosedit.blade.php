@extends('../layouts.vistaprincipal')
@section('head')
@endsection
@section('body')

<div class="container altura m-0">
  <div class="column justify-items-center">
    <form method="POST" action="/proyectos/{{$dato->id}}">
     <input type="hidden" name="_method" value="PATCH">
     {{csrf_field()}}

     nombre: <input type="text" name="nombre" value="{{$dato->nombre}}"><br>

     titulo: <input type="text" name="titulo" value="{{$dato->titulo}}"><br>

     fecha inicio: <input type="date" name="inicio" value="{{$dato->fechainicio}}"><br>

     fecha fin: <input type="date" name="fin" value="{{$dato->fechafin}}"><br>

     horas estimadas: <input type="number" name="estimadas" value="{{$dato->horasestimadas}}"> <br>

    <input type="submit" value="actualizar">  
    </form>
      <div class="container">
  <div class="row">
    @forelse($errors->all() as $error)
      {{$error}}<br>
    @empty
    @endforelse
  </div>
</div>
  </div>
</div>


@endsection