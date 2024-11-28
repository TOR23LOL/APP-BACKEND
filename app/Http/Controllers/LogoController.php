<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Logos;

class LogoController extends Controller
{
    public function Logos(){
        $getLogo = Logos::all();
        return view('/home', compact('getLogo'));
    }

    public function EditLG($id){
        $editLogo = Logos::where('id', $id)->firstOrFail();
        return view('editarLG', compact('editLogo'));
    }

    public function UpdateLG(Request $request, $id){
        $updateLG = Logos::findOrFail($id);
        $requestLG = $request->all();
        $updateLG->update($requestLG);
        return redirect()->to('/home');
    }
}
