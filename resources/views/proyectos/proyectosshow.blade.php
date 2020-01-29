@extends('../layouts.vistaprincipal')
@section('body')

<div class="container altura">
  <h2>Proyecto</h2>
          
  <table class="table">
    <thead>
      <tr>
        <th>nombre</th>
        <th>titulo</th>
        <th>fecha inicio</th>
        <th>fecha fin</th>
        <th>horas estimadas</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <td><a class="btn btn-success text-light" href="/proyectos/{{$proyecto->id}}/edit">modificar</a></td>
        <td><form method="post" action="/proyectos/{{$proyecto->id}}">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="delete">
        <input type="submit" class="btn btn-danger" name="" value="eliminar">
        </form></td>
    </tbody>
  </table>
</div>



@endsection