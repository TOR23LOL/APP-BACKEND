<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contactos;

class ContactosController extends Controller
{
    //
    public function Contactos(){ //Mostrar info
        $getContactos = Contactos::all();
        return view('/home', compact('getContactos'));
    }

    public function EditC($id){ //llamar a la vista
        $editContactos = Contactos::where('id', $id)->firstOrfail();
        return view('/editarC', compact('editContactos'));
    }

    public function UpdateC(Request $request, $id){
        $updateC = Contactos::findOrFail($id);
        $requestC = $request->all();
        $updateC->update($requestC);
        return redirect()->to('/home');
    }
}
