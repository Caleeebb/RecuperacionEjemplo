<x-layout>
    <div class="card mb-3">
        <h5 class="card-header bg-secondary text-white">Nuevo registro de Productos</h5>
        <div class="card-body">
            <form action="{{route('productos.store')}}" method="post">
                @include('components.validations')
                @csrf()
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="descrpcion" name="descripcion" placeholder="Descripcion" value="{{ old('descripcion ')}}">
                        <label for="descripcion">Descripcion</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fechaelab" name="fechaelab" placeholder="Apellido completo" value="{{ old('fechaelab')}}">
                        <label for="fechaelab">Fecha Elab</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floatign mb-3">
                                <input type="date" class="form-control" id="fechavence" name="fechavence" placeholder="Fecha de nacimento" value="{{ old('fechavence')}}">
                                <label for="fechavence">Fecha vence</label>
                            </div>
                        </div>
                        <div class="col-6">
                        <div class="form-floatign mb-3">
                                <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="Fecha de nacimento" value="{{ old('proveedor')}}">
                                <label for="proveedor">Proveedor</label>
                            </div>
                        </div>
                        <div class="col-3">
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-secondary float-end">Guardar</button>
                <a href="{{ route('productos.index') }}"  class="btn btn-warning float-end">Cancelar</a>
            </div>
        </div>
        </form>
    </div>
    </div>
</x-layout>