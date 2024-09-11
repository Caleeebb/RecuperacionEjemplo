<x-layout>
    <div class="card mb-3">
        <div class="card-header">
            <h5>Lista de Productos</h5>
            <a href="{{route('productos.create')}}" class="btn btn-secondary float-end">Nuevo</a>
        </div>
        <div class="card-body">
            @include('components.validations')
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 100px;">#</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fechaelab</th>
                        <th scope="col">Fecha vence</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Puesto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td scope="row">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="{{ route('empleados.edit', ['empleado' => $empleado->id]) }}" class="btn btn-primary">Editar</a>
                                    <a href="{{ route('empleados.show', ['empleado' => $empleado->id]) }}" class="btn btn-danger">Eliminar</a>
                                </div>
                            </td>
                            <td>{{ $empleado->nombres }}</td>
                            <td>{{ $empleado->apellidos }}</td>
                            <td>{{ $empleado->fechanac }}</td>
                            <td>{{ $empleado->sexo }}</td>
                            <td>{{ $empleado->puesto }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>