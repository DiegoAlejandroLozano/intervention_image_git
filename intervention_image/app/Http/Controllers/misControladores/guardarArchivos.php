<?php

namespace App\Http\Controllers\misControladores;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

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

    public function ImageController($medida, $image){
    	
    	$nombre_foto = 'img_' . $medida . '.png';

    	$path = public_path('storage/mis_fotos/'); 
    	$file = public_path('storage/mis_fotos/img1.png');   	
    	
    	$image = Image::make($file);
    	$image->fit($medida, $medida);
    	$image->save($path . $nombre_foto);

    	

    	return $image->response();

    	return base_path();
    }

    public function eliminar(){
    	Storage::disk('public')->deleteDirectory('mis_fotos');
    	return '<h1>imagen eliminada</h1>';
    }

    public function listar(){
    	$lista = Storage::disk('public')->allFiles('imagenes');

    	return $lista;
    }
}