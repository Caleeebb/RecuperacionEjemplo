<x-layout>
    <div class="card mb-3">
        <div class="col-3"></div>
        <div class="col-6 align-self-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Registro de Usuarios</h5>
                    Escriba los siguientes datos
                </div>
                <div class="card-body">
                    <form action="{{route('userCreate')}}" method="post">
                        @include('components.validations')
                        @csrf()
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="nombres de usuarios"
                                autofocus value="{{old('name')}}">
                            <label for="name">Nombres de Usuarios</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                name="correo@servidor.algo" value="{{old('email')}}">
                            <label for="email">Correo Electronico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="contraseña" value="{{old('password')}}">
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="contraseña"
                                value="{{old('password_confirmation')}}">
                            <label for="password">Repita la Contraseña</label>
                        </div>
                        <div class="d-grid gap-2 mb-3">
                            <button class="btn btn-primary" type="submit">CREAR</button>
                            <a href="{{route('formRegister')}}" class="btn btn-secondary">CANCELAR</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3"></div>
</x-layout>