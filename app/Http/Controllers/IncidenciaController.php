<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Schema;

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
    public function viewAdmin() {
        return view('admin.verInciAdmin');
    }

    public function editAdmin() {
        return view('admin.modInciAdmin');
    }

    //Comprueba que lo introducido en el formulario no da ningun error y en caso de que este bien lo guardara en la base de datos
    public function store(Request $request) {

        //Comprobar que se cumplen los requisitos
        $validator = Validator::make($request->all(), [
            'aula' => ['required'],
            'ordenador' => ['required'],
            'descripcion' => ['required']
        ]);

        if ($validator-> fails()) {
            return redirect('/incidencias')
                        ->withErrors($validator)
                        ->withInput();
        }

        $messages = [
            'required' => 'El :attribute es necesario.'
        ];

        //Para guardar los datos en la tabla
        $incidencia = new Incidencia;
        
        if  (empty($request->aula) || empty($request->ordenador)  || empty($request->descripcion)) {
            $request->session()->flash('alert-danger', 'No se ha podido añadir la incidencia!');
        }  else {
            $incidencia->user_id = auth()->user()->id;
            $incidencia->fecha = $request->fecha;
            $incidencia->aula = $request->aula;
            $incidencia->ordenador = $request->ordenador;
            $incidencia->descripcion = $request->descripcion;
  
            $incidencia->save();
            if ($incidencia->save()) {
                $request->session()->flash('alert-success', 'La incidencia se ha añadido correctamente!');
            }
          }
          return back();
    }

    //Funcion que muestra la lista de incidencias para el usuario normal
    public function createList() {
        
        $incidencia = new Incidencia;
        $incidencia = Incidencia::all();
        return view('incidencias.verIncidencias', ['incidencias' => $incidencia]);

    }

    //Funcion que muestra la lista de incidencias para el admin
    public function createListAdmin() {
        
        $incidencia = new Incidencia;
        $incidencia = Incidencia::all();
        return view('admin.verInciAdmin', ['incidencias' => $incidencia]);
        
    }

}