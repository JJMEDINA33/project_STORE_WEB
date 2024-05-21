<!DOCTYPE html>
<html>

<head>
    <title> Registro </title>
</head>

<body>
    <a href= "{{url('home')}}" aria-label=""> Volver al inicio </a>
    <h3> Ir a la lista de usuarios: 
        <a href= "{{url('users')}}"> Ver listado </a>
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