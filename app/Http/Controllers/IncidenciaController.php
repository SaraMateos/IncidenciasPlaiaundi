<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;
use App\Models\User;

class IncidenciaController extends Controller {

    //Mostras las distintas vistas de incidencias USUARIO NORMAL
    public function addNewIncidencia() {
        return view('incidencias.nuevaIncidencia');
    }

    public function editIncidencias() {
        return view('incidencias.nuevaIncidencia');
    }

    //Mostras las distintas vistas de incidencias ADMIN
    public function viewInciAdmin() {
        return view('admin.verInciAdmin');
    }

    public function editInciAdmin() {
        return view('admin.modInciAdmin');
    }

    //Comprueba que lo introducido en el formulario no da ningun error y en caso de que este bien lo guardara en la base de datos
    public function store(Request $request) {

        //Comprobar que se cumplen los requisitos
        $validator = Validatos::make($request->all(), [
            'aula' => ['required'],
            'ordenador' => ['required'],
            'estado' => ['required']
        ]);

        if ($validator-> fails()) {
            return redirect('/incidencias/añadir')
                        ->withErrors($validator)
                        ->withInput();
        }

        $messages = [
            'required' => 'El :attribute es necesario'
        ];

        //Para guardar los datos en la tabla
        $incidencia = new Incidencia;
        
        if /*(empty($request->user_id) ||*/(empty($request->fecha) || empty($request->aula) || mepty($request->ordenador)  || empty($request->estado)) {
            $request->session()->flash('alert-danger', 'No se ha podido añadir la incidencia!');
        }  else {
            //$incidencia->user_id = $request->user_id;
            $incidencia->fecha = $request->fecha;
            $incidencia->aula = $request->aula;
            $incidencia->ordenador = $request->ordenador;
            $incidencia->estado = $request->estado;
  
            $incidencia->save();
            if ($incidencia->save()) {
                $request->session()->flash('alert-success', 'La incidencia se ha añadido correctamente!');
            }
          }
          return back();
    }

    //Funcion que muestra la lista de usuarios
    public function createList() {
        
        $incidencia = new Incidencia;
        $incidencia = Incidencia::all();
        return view('incidencias.verIncidencias', ['incidencias' => $incidencia]);
        
    }

}