<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto; 
class CatalogoController extends Controller
{
public function store(Request $request) {
    // Validar datos del formulario
    $data = $request->validate([
        'nombre' => 'required|string|min:3',
        'email' => 'required|email|min:5',
        'telefono' => 'required|string|min:7'
    ]);

    // Guardar en la base de datos
    Contacto::create($data);

    session(['fileToDownload' => 'Documents/Presentacion QUAS editable (Carta)Peru.pdf']);
        session()->flash('message', 'Gracias por tus datos. Tu descarga comenzará en breve.');

        // Redirigir de nuevo a la misma vista
        return redirect('/casos_exito');
}

}