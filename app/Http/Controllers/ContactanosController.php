<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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

        $recaptcha = ReCaptcha::validate($request->input('g-recaptcha-response'));

         if(is_array($recaptcha) && (!isset($recaptcha['success']) || !$recaptcha['success'])){
        return back()->withErrors(['captcha_error' => 'Please verify that you are not a robot.']);
    }


        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' =>'required',
            'g-recaptcha-response' => 'required|recaptcha',


        ]);


        // Procesar los datos del formulario
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        // Guardar los datos en la base de datos utilizando el modelo Contact
        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->phone = $phone;
        $contact->message = $message;
        $contact->save();

    $correo = new ContactanosMailable($request ->all());
    Mail::to('soporte@quas.cl')->send($correo);
    return redirect()->route('contacto.index')->with("mensaje enviado");
    }
}


