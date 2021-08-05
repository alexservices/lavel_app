<?php namespace App\Http\Controllers;

class PruebaController extends Controller
{

public function index()
{

    return "Hola desde controlador";


}

public function nombre($nombre){
return "Hola mi nombre es: ". $nombre;
}


}