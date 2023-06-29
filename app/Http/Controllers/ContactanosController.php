<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('/contacto');

    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' =>'required',
        ]);

    $correo = new ContactanosMailable($request ->all());
    Mail::to('comercial@quas.cl')->send($correo);
    return redirect()->route('contacto.index')->with("mensaje enviado");
    }
}
