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
    <a href= "{{ url('store') }}">Registrar nuevo usuario</a>
    
    <h1>Usuarios</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href= "{{ url('viewupdate/' . $user->id)}}">Actualizar usuario</a>
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
</body>

</html>