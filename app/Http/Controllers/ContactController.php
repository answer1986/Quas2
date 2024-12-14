<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Biscolab\ReCaptcha\Facades\ReCaptcha;

class ContactController extends Controller
{
    // Método para mostrar el formulario de contacto
    public function showForm()
    {
        return view('/index'); // Reemplaza 'contact.index' con el nombre de tu plantilla del formulario de contacto
    }

    // Método para manejar la acción de envío del formulario
    public function submitForm(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:40',
            'phone' => 'nullable|numeric|digits_between:7,9',
            'message' => 'required|string|max:255',
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

        // Redirigir a una página de éxito o mostrar un mensaje de confirmación
        return redirect()->route('contacto.index')->with('success', 'Mensaje enviado con éxito. Gracias por contactarnos.');
        
    }
}
