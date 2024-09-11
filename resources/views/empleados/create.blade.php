<x-layout>
    <div class="card mb-3">
        <h5 class="card-header bg-secondary text-white">Nuevo registro de Empleados</h5>
        <div class="card-body">
            <form action="{{route('empleados.store')}}" method="post">
                @include('components.validations')
                @csrf()
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre completo" value="{{ old('nombres ')}}">
                        <label for="nombres">Nombres</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellido completo" value="{{ old('apellidos')}}">
                        <label for="apellidos">Apellidos</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floatign mb-3">
                                <input type="date" class="form-control" id="fechanac" name="fechanac" placeholder="Fecha de nacimento" value="{{ old('feachanac')}}">
                                <label for="fechanac">Nacimiento</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" id="sexo" aria-label="sexo" name="sexo">
                                    <option value="Femenino" {{old('sexo') == "Femenino " ? 'selected' : '' }}>Femenino</option>
                                    <option value="Maculino" {{old('sexo') == "Masculino " ? 'selected' : '' }}>Masculino</option>
                                </select>
                                <label for="sexo">Sexo</label>
                            </div>
                        </div>
                        <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="puesto" name="puesto" placeholder="puesto" value="{{ old('puesto')}}">
                        <label for="puesto">Puesto</label>
                    </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-secondary float-end">Guardar</button>
                <a href="{{ route('empleados.index') }}"  class="btn btn-warning float-end">Cancelar</a>
            </div>
        </div>
        </form>
    </div>
    </div>
</x-layout>