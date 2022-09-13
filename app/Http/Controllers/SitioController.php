<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contacto($codigo = null){
        if(!empty($codigo)){
            if($codigo == 1234){
                $nombre = "Leonardo Castillo";
                $email = "leo.castillo19@hotmail.com";
            }
        }else{
            $nombre = null;
            $email = null;
        }
    
        return view('paginas.contacto', compact('nombre', 'email'));
    }

    public function landingpage(){
        return view('paginas.landingpage');
    }

    public function precios(){
        return view('paginas.precios');
    }

    public function actualizaciones(){
        //Consulta a DB
    
        $ultima = 'Creación del sistema';
        $alpha = 'Versión Alpha';

        /**return view('paginas/actualizaciones', compact('ultima', 'alpha'));
        ->with(['masReciente' => $ultima, 'primera' => 'Versión alpha']);**/

        $versiones = [
            'Datos v1',
            'Datos v2',
            'Datos v3',
            'Datos v4',
        ];

        return view('paginas.actualizaciones', compact('versiones'));
    }
}
