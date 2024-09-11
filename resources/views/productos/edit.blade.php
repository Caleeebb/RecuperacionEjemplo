<x-layout>
    <div class="card mb-3">
        <h5 class="card-header bg-primary text-white">Editar registro de Productos</h5>
        <div class="card-body">
            <form action="{{route('productos.update', ['producto'=> $producto->id])}}" method="post">
                @include('components.validations')
                @csrf()
                @method('PUT')
                <div class="row">
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Nombre completo" value="{{ $producto->descripcion }}">
                        <label for="descripcion">Descripcion</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fechaelab" name="fechaelab" placeholder="Apellido completo" value="{{ $producto->fechaelab }}">
                        <label for="fechaelab">Fecha Elab</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                            <div class="form-floatign mb-3">
                                <input type="date" class="form-control" id="fechavence" name="fechavence" placeholder="Fecha de nacimento" value="{{ $producto->fechavence }}">
                                <label for="fechavence">Fecha Vence</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-select" id="sexo" aria-label="sexo" name="sexo">
                                    <option value="Femenino" {{$empleado-> sexo == "Femenino " ? 'selected' : '' }}>Femenino</option>
                                    <option value="Maculino" {{$empleado-> sexo == "Masculino " ? 'selected' : '' }}>Masculino</option>
                                </select>
                                <label for="sexo">Sexo</label>
                            </div>
                            <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="proveedor" value="{{ old('proveedor')}}">
                        <label for="proveedor">Proveedor</label>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary float-end">Actualizar</button>
                        <a href="{{ route('productos.index') }}" class="btn btn-warning float-end">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>