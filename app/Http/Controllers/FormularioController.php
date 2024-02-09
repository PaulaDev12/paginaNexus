<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
use Exception;

class FormularioController extends Controller
{
    public function enviarCorreo(Request $request)
    {
        try {
            $data = $request->all();
            Mail::to('paula.arias@nexus-it.co')->send(new EnviarCorreo($data));
            return response()->json(['message' => 'Correo enviado exitosamente']);
        } catch (Exception $e) {
            \Log::error('Error al enviar el correo electrónico: ' . $e->getMessage());
            return response()->json(['error' => 'Ocurrió un error al enviar el correo electrónico'], 500);
        }
    }
}
