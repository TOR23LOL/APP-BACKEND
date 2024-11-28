<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Redes;

class RedesController extends Controller
{
    public function Redes(){
        $getRedes = Redes::all();
        return view('/home', compact('getRedes'));
    }

    public function EditRD($id){
        $editRedes = Redes::where('id', $id)->firstOrFail();
        return view('editarRD', compact('editRedes'));
    }

    public function UpdateRD(Request $request, $id){
        $updateRD = Redes::findOrFail($id);
        $requestRD = $request->all();
        $updateRD->update($requestRD);
        return redirect()->to('/home');
    }
}
