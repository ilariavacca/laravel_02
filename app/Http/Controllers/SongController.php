<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Category;
use Illuminate\Http\Request;

class SongController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth') ;
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs=Song::all();
        // dd($songs);
       return view ('welcome', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
            return view('songs.create',compact('categories')) ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Song::create(
            [
                "name"=>$request->name,
                "img"=>$request->file('img')->store('public/img'),
                "year"=>$request->year,
                "category_id" => $request->category_id

            ]
            );
            return redirect(route('songs.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        // return view('songs.edit', compact('songs') );
        return view('songs.show ', compact('song'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        $song->update(
            [
               "name"=>$request->name,
            "img=">$request->img ? $request->file('img')->store('public/img') : $song->img,
            // "img"=>$request->file('img')->store('public.img'),

               "year"=>$request->year,
            ]
            );
            // if($request->img ){
            //     $song->update(
            //         [$request->file('img')->store('public/img')
            //         ]
            //     );
            // }
            return redirect(route('songs.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect(route('songs.index'));
    }
}
