<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Servicios;

class ServiciosController extends Controller
{
    //

    public function Servicios(){
        $getServicios = Servicios::all();
        return view('/home', compact('getServicios'));
    }

    public function EditSV($id){
        $editServicios = Servicios::where('id', $id)->firstOrfail();
        return view('/editarSV', compact('editServicios'));
    }

    public function UpdateSV(Request $request, $id){
        $updateSV = Servicios::findOrfail($id);
        $requestSV = $request->all();
        $updateSV->update($requestSV);
        return redirect()->to('/home');
    }
}
