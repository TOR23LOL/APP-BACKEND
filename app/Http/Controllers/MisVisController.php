<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Misvis;

class MisVisController extends Controller
{
    public function MisionVision(){
        $getMisVis = Misvis::all();
        return view('/home', compact('getMisVis'));
    }

    public function EditMV($id){
        $editMisVis = Misvis::where('id', $id)->firstOrFail();
        return view('editarMV', compact('editMisVis'));
    }

    public function UpdateMV(Request $request, $id){
        $updateMV = Misvis::findOrFail($id);
        $requestMV = $request->all();
        $updateMV->update($requestMV);
        return redirect()->to('/home');
    }
}
