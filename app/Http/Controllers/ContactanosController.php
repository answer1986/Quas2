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

    public function store(){

    $correo = new ContactanosMailable;
    Mail::to('comercial@quas.cl')->send($correo);
    return "Mensaje enviado";
    }
}
