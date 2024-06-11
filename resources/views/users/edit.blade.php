<!DOCTYPE html>
<html>

<head>
    <title>Actualizacion</title>
</head>

<body>
    <a href= "/home" aria-label=""> Volver al inicio </a>
    <h3> Regresar a la lista de usuarios: 
        <a href= "/users"> Volver al listado </a> </h3>

    <h1> Actualiza tus datos </h1>

    <form action= "{{url('update/' .$user->id)}}" method= "POST">
        @csrf
        @method('PUT')
    <label for="name"> Nombre </label>
    <input type="text" name="name" id="name" value= "{{$user->name}}">
    <label for="email"> Correo </label>
    <input type="text" name="email" id="email" value= "{{$user->email}}">
    <label for="password"> Contraseña </label>
    <input type="password" name="password" id="password" value= "{{$user->password}}">

    <button type="submit"> Actualizar usuario </button>
</body>

</html>