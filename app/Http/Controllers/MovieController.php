<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Movie;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use App\Http\Requests\MovieCreateRequest;
use App\Http\Requests\MovieUpdateRequest;

class MovieController extends Controller
{
   
    public function __construct(){
        $this->middleware(middleware: 'auth');
        $this->middleware('admin'); 
    } 
        
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        /* return "Estoy en el index";   */  
        $movies = Movie::Movies();
        $movies = Movie::simplepaginate(2);
        return view('movie.index',compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* return "Estoy en create"; */
        $genres = Genre::pluck('genre', 'id');
        return view('movie.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieCreateRequest $request)
    {
        Movie::create($request->all());
        Session::flash('message','Movie has been created succesfully');
        return redirect('/movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie= Movie::find($id);
        $genres = Genre::pluck('genre', 'id');
        return view('movie.edit',['movie'=>$movie,'genres'=>$genres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieUpdateRequest $request, $id)
    {
        $movie= Movie::find($id);
        $movie->fill($request->all());
        $movie->save();

        Session::flash('message','Movie has been edited successfully');
        return Redirect::to('/movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie= Movie::find($id);
        $movie->delete();
        \Storage::delete($movie->path);
        Session::flash('message','Movie has been deleted successfully');
        return Redirect::to('/movie');
    }
}
