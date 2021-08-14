<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class FrontController extends Controller
{

public function __construct(){
$this->middleware('auth', ['only'=>'admin','contact','reviews']);
}

    public function index()
    {
        
        return view('index');
    }

    public function contact()
    {
        return view('contact');
        
    }

    public function reviews()
    {
    $movies = Movie::Movies();
    return view('reviews',compact('movies'));
    }

    public function admin()
    {
        return view('admin.index');
    }

}
