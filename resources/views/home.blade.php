<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <title>Inicio</title>        
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: hsl(166, 72%, 64%);
        margin: 0;
        padding: 0;
        color: #fff;
    }

    .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: hsl(145, 44%, 44%);
        padding: 10px 20px;
    }

    .top-bar h1 {
        margin: 0;
        color: #fff;
        text-align: center;
    }

    .user-menu {
        display: flex;
        align-items: center;
    }

    .cart-button {
        display: flex;
        align-items: center;
        background-color: #3cbf86;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        text-decoration: none;
        margin-right: 20px;
    }

    .cart-icon {
        width: 20px;
        height: 20px;
        margin-right: 5px;
    }

    .user-dropdown {
        position: relative;
        display: inline-block;
        margin-right: 60px;
    }

    .user-dropdown-content {
        display: none;
        position: absolute;
        background-color: #3cbf86;
        min-width: 10px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        padding: 10px;
        z-index: 1;
    }

    .user-dropdown:hover .user-dropdown-content {
        display: block;
    }

    .user-dropdown a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 5px 0;
    }

    .logout-button {
        background-color: transparent;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .logout-button:hover {
        text-decoration: underline;
    }

    /* Otros estilos CSS aquí */

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
    }
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .smaller-button {
        padding: 10px 20px; /* Reduce el espacio interno del botón */
        font-size: 14px; /* Reduce el tamaño de la fuente del botón */
    }
</style>

<body>
    <div class="top-bar">
        <h1>MI PRIMERA TIENDA WEB</h1>
        <div class="user-menu">
            <a href="cart-summary" class="cart-button" aria-label="">Resumen de Compra</a>
            <a href= "{{ url('store') }}" class="cart-button" aria-label="">Registrar nuevo usuario</a>
            <div class="user-dropdown">
                <button class="logout-button">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6C2 5.44772 2.44772 5 3 5H21C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6Z"
                              fill="currentColor" />
                        <path d="M2 12.0322C2 11.4799 2.44772 11.0322 3 11.0322H21C21.5523 11.0322 22 11.4799 22 12.0322C22 12.5845 21.5523 13.0322 21 13.0322H3C2.44772 13.0322 2 12.5845 2 12.0322Z"
                              fill="currentColor" />
                        <path d="M3 17.0645C2.44772 17.0645 2 17.5122 2 18.0645C2 18.6167 2.44772 19.0645 3 19.0645H21C21.5523 19.0645 22 18.6167 22 18.0645C22 17.5122 21.5523 17.0645 21 17.0645H3Z"
                              fill="currentColor" />
                    </svg>
                </button>
                <div class="user-dropdown-content">
                    <form action="{{ url('history') }}" method="POST">@csrf<button class="logout-button smaller-button">Historial de pedidos</button></form>
                    <form action="{{ url('logout') }}" method="POST">@csrf<button class="logout-button smaller-button">Cerrar Sesión</button></form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @forelse ($products as $product)
        <label for="product_{{ $product->id }}" style="border:1px solid #333;padding:5px;display:inline-block">
            <p>
                <strong>{{ $product->name }}</strong>
                <br>
                <small>Precio: {{ format_cop($product->price) }}</small>
            </p>
            <img src="{{ $product->image }}" width="100" alt="Imagen de producto" />
            <br>
            {{--
            <form action="{{ url('cart/add') }}" method="POST" style="display: inline-block;">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit">+</button>
            </form>

            <form action="{{ url('cart/remove') }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <button type="submit">-</button>
            </form>
            --}}
        </label>
        @empty
        <p>No hay productos en esta tienda, vuelva pronto.</p>
        @endforelse
    </div>
</body>

<footer>
    <p>&copy; 2024 Ejemplo.com - Todos los derechos reservados.</p>
    <nav>
        <ul>
            <li><a href="/about">Acerca de nosotros</a></li>
            <li><a href="/contact">Contacto</a></li>
            <li><a href="/terms">Términos de servicio</a></li>
        </ul>
    </nav>
</footer>

</html>