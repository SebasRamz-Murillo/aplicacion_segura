<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/index">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link">{{ Auth::user()->name }}</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if(Auth::user()->role == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users') }}">Usuarios</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books') }}">Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('genres') }}">Géneros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('authors') }}">Autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('editorials') }}">Editoriales</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">
                        <button type="button" class="btn btn-outline-primary me-2">
                            Salir
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
