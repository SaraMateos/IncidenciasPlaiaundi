<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;
use App\Models\User;

class IncidenciaController extends Controller {
    public function addIncidencia() {
        
        $incidencia = new Incidencia();

        $incidencia->save();
        return "Se ha creado la incidencia";

    }

    public function addUser($id) {
        
        $incidencia = Incidencia::find($id);
        $user = new User();

        $incidencia->comments()->save('$user');
        return "Comment has been posted";

    }
}