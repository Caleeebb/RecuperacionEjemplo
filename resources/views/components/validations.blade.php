@if($errors->any())
<div class="alert alert-warning alert-dismissible fade show" role="alert">

    <strong>Oppps, algo pasa</strong> Algunos datos del formulario estan vacios.
    <p>
        Los siguientes datos se deben escribir para poder procesar la informacion:
    </p>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif