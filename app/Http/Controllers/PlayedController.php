<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Played;

class PlayedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows = Played::all(); 
        return view('played.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('played.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
            'track_name' => 'required',
            'artist_name' => 'required',
            'album_name' => 'required'

            ],
        
            [ 
            'track_name.required' => 'Wajib di Isi',
            'artist_name.required' => 'Wajib di Isi',
            'album_name.required' => 'Wajib di Isi'
            ]
        ); 

        Played::create([ 
        'track_name' => $request->track_name,
        'artist_name' => $request->artist_name,
        'album_name' => $request->album_name
        ]); 
        return redirect('played');
    
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
        //
        $row = Played::findOrFail($id); 
        return view('played.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(
            [
            'track_name' => 'required',
            'artist_name' => 'required',
            'album_name' => 'required'

            ],
        
            [ 
            'track_name.required' => 'Wajib di Isi',
            'artist_name.required' => 'Wajib di Isi',
            'album_name.required' => 'Wajib di Isi'
            ]
        ); 

        $row = Played::findOrFail($id); 
        $row->update([
        'track_name' => $request->track_name,
        'artist_name' => $request->artist_name,
        'album_name' => $request->album_name
        ]); 
        return redirect('played');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
