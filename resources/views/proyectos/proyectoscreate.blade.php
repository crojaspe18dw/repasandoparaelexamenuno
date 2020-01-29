@extends('../layouts.vistaprincipal')
@section('head')
@endsection
@section('body')

<div class="container altura ">
  <div class="column justify-items-center">
    <form action="/proyectos" method="POST">
      {{csrf_field()}}

     nombre: <input type="text" name="nombre"><br>

     titulo: <input type="text" name="titulo"><br>

     fecha inicio: <input type="date" name="inicio"><br>

     fecha fin: <input type="date" name="fin"><br>

     horas estimadas: <input type="number" name="estimadas"> <br>

    <input type="submit" value="enviar">  
    </form>
  </div>
  <div class="container">
  <div class="row">
    @forelse($errors->all() as $error)
      {{$error}}<br>
    @empty
    @endforelse
  </div>
</div>
</div>



@endsection