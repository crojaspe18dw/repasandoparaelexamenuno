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
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$datos->nombre}}</td>
        <td>{{$datos->apellido}}</td>
        <td>{{$datos->email}}</td>
        <td>{{$datos->telefono}}</td>
      </tr>
	</tbody>
	</table>
@endsection