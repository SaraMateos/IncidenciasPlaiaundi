<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;
use App\Models\User;

class IncidenciaController extends Controller {

    //Mostras las distintas vistas de incidencias
    public function viewIncidencia() {
        return view('incidencias.verIncidencias');
    }

    public function addNewIncidencia() {
        return view('incidencias.nuevaIncidencia');
    }

    //Comprobras que lo introducido en el formulario no da ningun error y en caso de que este bien lo guardara en la base de datos
    public function store(Request $request) {

        //Comprobar que se cumplen los requisitos
        $validator = Validatos::make($request->all(), [
            'aula' => ['required'],
            'ordenador' => ['required'],
            'estado' => ['required']
        ]);

        if ($valdiator-> fails()) {
            return redirect('/incidencias/añadir')
                        ->withErrors($validator)
                        ->withInput();
        }

        $messages = [
            'required' => 'El :attribute es necesarrio'
        ];

        //Para guardar los datos en la tabla
        $incidencia = new Incidencia;
        
    }

    /*public function addIncidencia() {
        
        $incidencia = new Incidencia();

        $incidencia->save();
        return "Se ha creado la incidencia";

    }

    public function addUser($id) {
        
        $incidencia = Incidencia::find($id);
        $user = new User();

        $incidencia->comments()->save('$user');
        return "Comment has been posted";

    }*/
}