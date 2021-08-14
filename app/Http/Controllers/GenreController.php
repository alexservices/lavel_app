<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\GenreRequest;
use App\Models\Genre;
class GenreController extends Controller
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
        $data['genres'] = Genre::orderBy('id','desc')->simplepaginate(5);
   
        return view('genre.index',$data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function store(GenreRequest $request)
    {
        $genre   =   Genre::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'genre' => $request->genre
                    ]);
    
        return response()->json(['success' => true]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $genre  = Genre::where($where)->first();
 
        return response()->json($genre);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $request)
    {
        $genre = Genre::where('id',$request->id)->delete();
   
        return response()->json(['success' => true]);
    }


}
