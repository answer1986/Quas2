<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Download;

class CatalogoController extends Controller

{


    public function showForm(){
        return view('/casos_exito'); 

    }

    public function store(Request $request) 
    {
         $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|min:5',
            'phone' => 'required|string|min:7'
        ]);

      
        // Procesar los datos del formulario
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

       
        $download = new Download();
        $download->name = $name;
        $download->email = $email;
        $download->phone = $phone;
        $download->save();
        
        session()->flash('message', 'Gracias por tus datos. Tu descarga comenzará en breve.');
        return redirect()->route('casos.downloadFile');
        time_sleep_until(80000);
        return refresh()->route('casos.exito');

    }

    public function downloadFile()
    {
        $pathToFile = public_path('Documents/Presentacion QUAS editable (Carta)Peru.pdf');
        return response()->download($pathToFile);

    }
}
