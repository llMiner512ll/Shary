<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-lg-5">
        <b class="navbar-brand">Inventario</b>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="true"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('productos')}}">Artículos</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('nuevo')}}">Agregar articulo</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>
