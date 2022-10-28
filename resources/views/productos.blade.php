<x-layout.app>
    <x-slot name="title">Productos</x-slot>
    <div class="gx-lg-5">
        <div class="container">
            <nav class="navbar">
                <div class="container-fluid row align-items-start">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <a class="btn btn-outline-primary w-auto" href="{{route('nuevo')}}">Nuevo Producto</a>
                </div>
            </nav>
        </div>

        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    @foreach($productos as $producto)
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 p-4"><b class="mb-0">{{$producto->tipo->nombre}}</b></div>
                                    <p class="mb-0">Marca: {{$producto->marca->nombre}}</p>
                                    <p class="mb-0">Modelo: {{$producto->modelo->nombre}}</p>
                                    <p class="mb-0">Color: {{$producto->color->nombre}}</p>
                                    <p class="mb-0">S/N: {{$producto->serie}}</p>
                                    {{--<a href="/detallesproducto/{{$producto->id_producto}}" class="btn btn-primary btn-lg mt-3">Ver detalles</a>--}}
                                    <a href="{{route('detallesproducto')}}/{{$producto->id_producto}}" class="btn btn-outline-warning btn-lg mt-3">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

        </section>
        <center class="p-2">
        <div>
            <i class="bi bi-arrow-left"></i>
        <select name="list" class="">
            <option>6</option>
            <option>20</option>
            <option>50</option>
            <option>100</option>
        </select>
            <i class="bi bi-arrow-right"></i>
        </div>
        </center>
    </div>
</x-layout.app>

