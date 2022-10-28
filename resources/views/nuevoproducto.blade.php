<x-layout.app>
    <x-slot name="title">Nuevo</x-slot>
    <div class="container">

        <h1 class="container w-50">Nuevo Producto</h1>

    </div>
<div class="container p-4 w-50">
    <form action="/nuevoproducto" method="POST">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="serie" placeholder="name@example.com">
            <label for="floatingInput">Serie</label>
        </div>

        <div class="form-floating mb-3">
{{--            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">--}}
{{--            <label for="floatingInput">Tipo</label>--}}
            <input class="form-control" name="tipo" id="floatingInput" list="tipos" placeholder="Busca colaborador...">
                <datalist id="tipos">
                    @foreach($tipos as $tipo)
                        <option value="{{$tipo->nombre}}">{{$tipo->nombre}}</option>
                    @endforeach
                </datalist>
            <label for="floatingInput">Tipo</label>
        </div>

        <!-- Text input -->
        <div class="form-floating mb-3">
{{--            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">--}}
{{--            <label for="floatingInput">Modelo</label>--}}
            <input class="form-control" name="modelo" id="floatingInput" list="modelos" placeholder="Busca colaborador...">
            <datalist id="modelos">
                @foreach($modelos as $modelo)
                    <option value="{{$modelo->nombre}}">{{$modelo->nombre}}</option>
                @endforeach
            </datalist>
            <label for="floatingInput">Modelo</label>
        </div>

        <!-- Text input -->
        <div class="form-floating mb-3">
{{--            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">--}}
{{--            <label for="floatingInput">Marca</label>--}}
            <input class="form-control" name="color" id="floatingInput" list="marcas" placeholder="Busca colaborador...">

            <datalist id="marcas">
                @foreach($marcas as $marca)
                    <option value="{{$marca->nombre}}">{{$marca->nombre}}</option>
                @endforeach
            </datalist>

            <label for="floatingInput">Marca</label>

        </div>

        <!-- text input -->
        <div class="form-floating mb-3">
{{--            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">--}}
{{--            <label for="floatingInput">Color</label>--}}
            <input class="form-control" name="color" id="floatingInput" list="colores" placeholder="Busca colaborador...">

                <datalist id="colores">
                    @foreach($colores as $color)
                    <option value="{{$color->nombre}}">{{$color->nombre}}</option>
                    @endforeach
                </datalist>

            <label for="floatingInput">Color</label>
        </div>

        <!-- Number input -->
        <div class="form-floating mb-3">
{{--            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">--}}
{{--            <label for="floatingInput">Dimensiones</label>--}}
            <input class="form-control" name="color" id="floatingInput" list="dimension" placeholder="Busca colaborador...">

            <datalist id="dimension">
                @foreach($dimensiones as $dimension)
                    <option value="{{$dimension->nombre}}">{{$dimension->nombre}}</option>
                @endforeach
            </datalist>
            <label for="floatingInput">Dimensiones</label>
        </div>

        <!-- Message input -->
        <div class="form-floating mb-3">
{{--            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">--}}
{{--            <label for="floatingInput">Peso</label>--}}
            <input class="form-control" name="color" id="floatingInput" list="pesos" placeholder="Busca colaborador...">
            <datalist id="pesos">
                @foreach($pesos as $peso)
                    <option value="{{$peso->nombre}}">{{$peso->nombre}}</option>
                @endforeach
            </datalist>
            <label for="floatingInput">Peso</label>
        </div>


        <!-- Submit button -->

        <button type="submit" class="btn btn-outline-primary btn-block mb-4">Guardar</button>
    </form>
    <button class="btn btn-outline-secondary btn-block mb-4" onclick="window.history.back()" >Volver</button>
</div>
</x-layout.app>
