<?php

namespace App\Http\Controllers\misControladores;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class guardarArchivos extends Controller
{

	public function guardarArchivo_GET(){
		return view('mis_vistas.formulario');
	}

    public function guardarArchivo_POST(Request $request){    	

    	$ruta_img = Storage::disk('public')->putFile('mis_fotos', $request->imagen);

    	$ruta = '/storage/' . $ruta_img;

    	return view('mis_vistas.mostrar_img', array( 'ruta' => $ruta ));

    }

    public function eliminar(){

    	$ruta = 'mis_fotos/7GM3oGfHYnU8FKlYFZncAcp7dlfy83TdmaDk9w0p.png';

    	Storage::disk('public')->delete($ruta);

    	return 'Archivo eliminado exitosamente';
    }
}
