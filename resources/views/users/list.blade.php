<!DOCTYPE html>
<html>

<head>
    <title>Usuarios</title>
</head>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: hsl(166, 72%, 64%);
            padding: 10px 20px;
        }
        .nav-button {
            background-color: hsl(212, 82%, 57%);
            color: #ffffff;
            border: 1px solid #222121;
            border-radius: 4px;
            padding: 10px 20px;               
            margin-right: 20px;        
        }
        h1 {
            color: #333;
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
        .table tbody tr:hover {
        background-color: #f1f1f1;
        }
   </style>

<body>
    <header class="top-bar">
        <a href= "home" class= "nav-button" aria-label=""> Volver al inicio </a>
        <h1>Usuarios Registrados</h1>
        <div class= "user-menu">
            <a href= "login" class="nav-button" aria-label="">Inicio de Sesion</a>
            <a href= "users/create" class="nav-button" aria-label="">Registrate</a>            
        </div>        
    </header>    
    <div>   
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Actalizacion</th>
                    <th>Eliminacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href= "{{ url('user/edit/' . $user->id)}}" >Actualizar usuario</a>                        
                    </td>
                    <td>
                        <form action= "{{url('delete/' .$user->id)}}" method= "POST">
                            @csrf
                            @method('DELETE')
                            <button type= "submit">Eliminar usuarios</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
</body>

</html>