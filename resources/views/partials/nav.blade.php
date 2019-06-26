<div class="container">
    {{ dump(request()->path()) }}
    <ul class="list-group list-group-flush">
        <li class="{{ seleccionado('inicio') }} list-group-item"><a href="/">Inicio</a></li>
        <li class="{{ seleccionado('acercade') }} list-group-item"><a href="/acercade">Acerca de</a></li>
        <li class="{{ seleccionado('productos.*') }} list-group-item"><a href="{{ route('productos.index') }}">Catálogo de productos</a></li>
        <li class="{{ seleccionado('crear-mensaje') }} list-group-item"><a href="{{ route('crear-mensaje') }}">Contacto</a></li>
    </ul>
    @yield('contenido')
</div> 