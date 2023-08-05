<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Biscolab\ReCaptcha\Facades\ReCaptcha;


class ContactanosController extends Controller
{
    public function index(){
        return view('/contacto');

    }

    public function store(Request $request){

        $recaptcha = ReCaptcha::verify($request->input('g-recaptcha-response'));

        if(!$recaptcha->isSuccess()){
            return back()->withErrors(['captcha_error' => 'Please verify that you are not a robot.']);
        }


        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' =>'required',
            'g-recaptcha-response' => 'required|captcha',  // <-- Aquí está la validación para ReCaptcha

        ]);

    $correo = new ContactanosMailable($request ->all());
    Mail::to('soporte@quas.cl')->send($correo);
    return redirect()->route('contacto.index')->with("mensaje enviado");
    }
}


