<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registro de Productos</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
            background-color: #d6e1e381;                    
            height: 70vh;
            margin: 0;
            flex-direction: column;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: hsl(166, 72%, 64%);
            padding: 10px 20px;
        }
        .user-menu {
            display: flex;
            align-items: center;
        }
        .nav-button {
            background-color: hsl(212, 82%, 57%);
            color: #ffffff;
            border: 1px solid #222121;
            border-radius: 4px;
            padding: 10px 20px;               
            margin-right: 20px;        
        }
        .login-form {
            background-color: #ffffffe1;
            padding: 7px;
            border-radius: 100px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
            border: 1px solid #ccc;
            display: flex;
            justify-content: center;
        }
        .login-form form {
            display: flex;
            align-items: center;
            width: 100%;
        }
        .login-form input[type="text"] {
            width: 250px;
            padding: 7px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 15px;
        }
        .login-form button {
            padding: 5px;
            background-color: #007BFF;
            border: none;
            border-radius: 3px;
            color: white;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: #0056b3;
        }
        .alert {
            padding: 5px;
            background-color: #4CAF50; /* Green */
            color: white;
            margin-bottom: 5px;
        }
        .closebtn {
            margin-left: 5px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 15px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 7px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .table th {
            background-color: #4CAF50;
            color: white;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <header class="top-bar">
        <a href="/home" class="nav-button" aria-label=""> Volver al inicio </a>
        <h1>Sección de Registro de Productos</h1>        
        <a href="/home" class="nav-button" aria-label=""> Volver al inicio </a>              
    </header>
    <br>
    <div class="login-form">        
        <form action="{{ isset($product) ? url('products/update/'.$product->id) : url('product/store') }}" method="POST">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif
            <div>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" placeholder="Nombre del Producto" value="{{$product->name ?? ''}}" required>
            </div>
            <div>
                <label for="image">Imagen:</label>
                <input type="text" id="image" name="image" placeholder="URL de la Imagen" value="{{$product->image ?? ''}}" required>
            </div>
            <div>
                <label for="price">Precio:</label>           
                <input type="text" id="price" name="price" placeholder="Precio (sin puntos)" value="{{$product->price ?? ''}}" required>
            </div>
            <div>
                <button type="submit">{{ isset($product) ? 'Actializar' : 'Guardar'}}</button>
            </div>
        </form>
        <div>
            <!-- Mostrar mensajes flash -->
        @if(session('success'))
        <div class="alert horizontal" >
            <span class="closebtn" onclick="this.parentElement.style.display='none';">⚠️Cerrar</span>
            {{ session('success') }}
        </div>
        @endif
        </div>
    </div>
    <div>   
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Actualización</th>
                    <th>Eliminación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->image}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{ url('products/'. $product->id) }}">Actualizar Producto</a>                        
                    </td>
                    <td>
                        <form action="{{ url('products/delete/' . $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar Producto</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
