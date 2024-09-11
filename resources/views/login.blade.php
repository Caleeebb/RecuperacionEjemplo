<x-layout>
    <div class="row mb-3">
        <div class="col-3"></div>
        <div class="col-6 aling-self-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Hola! comencemos el trabajo</h5>
                    Iniciando sesion
                </div>
                <div cass="card-body">
                    <form action="{{route('LogIn') }}" method="post">
                        @include('components.validations')
                            @csrf()
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            <label for="email">Correo Electronico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="contraseña">
                            <label for="email">Contraseña</label>
                        </div>
                        <div class="d-grid gap-2 mb-3">
                            <button class="btn btn-primary" type="submit">Iniciar sesion</button>
                            <p>
                                ¿No tiene una cuenta de usuario?,No hay problema.
                                <a href="{{ route('formRegister') }}">Crear una</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</x-layout>