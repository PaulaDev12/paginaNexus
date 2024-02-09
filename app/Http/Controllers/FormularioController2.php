<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo2;

class FormularioController2 extends Controller
{
    public function enviarCorreo (Request $request)
    {
        $data = $request->all();

        Mail::to('paulaarias301@hotmail.com')->send(new EnviarCorreo($data));

        return response()->json(['message' =>'Correo enviado exitosamente']);
    
    }
}
