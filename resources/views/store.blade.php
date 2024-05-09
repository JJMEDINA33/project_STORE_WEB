<!DOCTYPE html>
<html>

<head>
    <title> Registro </title>
</head>

<body>
    <h3> Regresar a la lista de usuarios: 
        <a href= "{{url('users')}}"> Volver al listado </a>
    </h3>
    <h1> Registrate con tus datos </h1>
    <form action= "{{ url('create') }}" method= "POST">
        @csrf
    <lavel for="name"> Nombre </lavel>
    <input type="text" name="name" id="name">
    <lavel for="email"> Correo </lavel>
    <input type="text" name="email" id="email">
    <lavel for="Password"> Contraseña </lavel>
    <input type="text" name="password" id="password">

    <button type="submit"> Guardar usuario </button>
</body>

</html>