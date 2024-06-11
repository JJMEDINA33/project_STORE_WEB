<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PruebaCommand extends Command {
    protected $signature = 'app:prueba-command';   
    protected $description = 'Command description';

    public function handle(){
        $userName = $this->ask('Dame tu nombre');
        $saludar = newSaludoUC();
        $saludar->buenosDias($userName);
    }
/*
Crear un api para crear los perfiles/roles para que puedan ser escalables por si surgen nuevos permisos aparte de cliente y administrado, un ejemplo puede ser vendedor, asesor, etc
Crear un api para actualizar los permisos que tiene un usuario, por ejemplo, cambiar su perfil de cliente a administrador o de cliente a vendedor
Esto debe ser un api, que debe tener un manejo de errores
Que cambie la respuesta si ya tiene asignado el perfil el usuario y si el rol que se intenta asignar no existe
La actividad tiene tiempo
desde las 7:30 hasta las 8:40
Que deben hacer? 
2 controladores, uno para cada api
cada uno debe tener su usecase
Las consultas a bases de datos deben ir en un respectivo repositorio
los repositorios y use case deben tener sus interface
-Consumir el api en el archivo api que se encuentra en la carpeta de routes
*/
}

