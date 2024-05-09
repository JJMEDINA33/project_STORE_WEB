<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\UseCases\ChildrenRenacerUC;

class ChildrenRenacerCommand extends Command
{
    protected $signature = 'app:children-renacer-command';

    protected $description = 'Command description';

    public function handle(){

        // Creacion de instancias
        $children1 = new ChildrenRenacerUC('Mahelet Sofia', 'Medina De la Ossa', 2, 'parvulo', 'Jilson', 'Maria');
        $children2 = new ChildrenRenacerUC('Elena Sofia', 'Mercado Sanchez', 0, 'gestacion', 'Favian', 'Elcy');
        $children3 = new ChildrenRenacerUC('Nicolas Rafael', 'Argumedo Sanchez', 5, 'Jardin', 'Yonatan', 'Eva');
        // Salidas
        echo $children1->greeting();
        echo $children2->greeting();
        echo $children3->greeting();        
    }
}