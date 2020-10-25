<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesControler extends Controller
{
    public function store(Request $request)
    {
    		request()->validate([

    			'nombre' => 'required',
    			'email' => 'required',
    			'asunto' => 'required',
    			'contenido' => 'required'




    		]);

    		return 'Datos validados';
    }
}
