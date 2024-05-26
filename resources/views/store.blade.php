<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Registro </title>
    <style> 
        body {
            font-family: Arial, sans-serif;
            background-color: #98b5bd81;                    
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
    </style>
</head>

<body>
    <header class="top-bar">
        <a href= "home" class="nav-button" aria-label=""> Volver al inicio </a>
        <h1>Seccion de Registro de Usuarios</h1>
        <div class= "user-menu">
            <a href= "login" class="nav-button" aria-label="">Inicio de Sesion</a>
            <a href= "{{url('users')}}" class="nav-button" aria-label="">Ver listado de Usuarios</a>
        </div>        
    </header>
    <br>
    <div class="login-form">        
        <h1> Registrate con tus datos </h1>
        <form action= "{{ url('create') }}" method= "POST">
            @csrf
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Usuario" required>
            
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" placeholder="Usuario" required>
            
            <label for="password">Contraseña:</label>
            <div class="password-container">
                <input type= "password" id= "password" name= "password" placeholder= "Contraseña" required>
                <span class= "toggle-password" onclick= "togglePasswordVisibility()">👁️</span>
            </div>

            <button type="submit"> Guardar usuario </button>
        </form>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var togglePassword = document.querySelector(".toggle-password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                togglePassword.textContent = "🙈";
            } else {
                passwordInput.type = "password";
                togglePassword.textContent = "👁️";
            }
        }
    </script>
</body>

</html>