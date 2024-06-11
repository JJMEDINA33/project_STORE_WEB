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
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 280px;
            text-align: center;
            border: 1px solid #ccc;
        }
        .login-form input[type="text"],
        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .password-container {
            position: relative;
            display: flex;
            align-items: center;
        }        
        .toggle-password {
            position: absolute;
            right: 10px;
            cursor: pointer;
            user-select: none;
        }        
        .login-form button {
            width: 50%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 3px;
            color: white;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: #0056b3;
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
        <a href= "/home" class="nav-button" aria-label=""> Volver al inicio </a>
        <h1>Seccion de Registro de Productos</h1>        
        <a href= "/home" class="nav-button" aria-label=""> Volver al inicio </a>              
    </header>
    <br>
    <div class="login-form">        
        <h1>Registra los Productos</h1>
        <form action= "{{ url('product/store') }}" method= "POST">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" placeholder="Nombre del Producto" required>
            
            <label for="image">Imagen:</label>
            <input type="text" id="image" name="image" placeholder="Imagen" required>
            
            <label for="int">Precio:</label>           
            <input type= "text" id= "price" name= "price" placeholder= "Precio" required>
            
            <button type="submit">Guardar Producto</button>
        </form>
    </div>
    <div>   
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Actalizacion</th>
                    <th>Eliminacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->image}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href= "{{ url('product/edit/' . $product->id)}}" >Actualizar Producto</a>                        
                    </td>
                    <td>
                        <form action= "{{url('product/delete/' .$product->id)}}" method= "POST">
                            @csrf
                            @method('DELETE')
                            <button type= "submit">Eliminar Producto</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>