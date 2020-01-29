@extends('../layouts/vistaprincipal')
@section('body')
	  <h2>Empleados</h2>
  <!--<a class="btn btn-info h2 btn-lg" href="proyectos/create">crear proyecto</a>-->
          
  <table class="table">
    <thead>
      <tr>
        <th>nombre</th>
        <th>apellido</th>
        <th>email</th>
        <th>telefono</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
@foreach($empleados as $empleado)
      <tr>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->apellido}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        <td><a class="btn btn-success" href="empleados/{{$empleado->id}}">ver</a></td>
@endforeach
	</tbody>
	</table>
@endsection