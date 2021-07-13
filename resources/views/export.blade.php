<table>
  <thead>
    <tr>
      <th>N°</th>
      <th>Matricula</th>
      <th>Alumno</th>
      <th>Genero</th>
      <th>Fecha de nacimiento</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($alumnos as $alumno)
    <tr>
      <td>{{ $alumno->id }}</td>
      <td>{{ $alumno->matricula }}</td>
      <td>{{ $alumno-> app .', '. $alumno->nombre }}</td>
      <td>{{ $alumno->gen }}</td>
      <td>{{ $alumno->fn }}</td>
      <td><a href="mailto: {{ $alumno->email }}">{{ $alumno->email }}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>