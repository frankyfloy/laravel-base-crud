<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

// Classe da importarte per le query grezze
use DB;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $sql ='select * from comics WHERE 1=1';
        $where = [];

        if ($request->has('id')) {
            $where['id'] = $request->get('id');
            $sql .= " AND ID=:id" ;
        }

        if ($request->has('series')) {
            $where['series'] = $request->get('series');
            $sql .=" AND series = :series";
        }

        $comics = DB::select($sql,array_values($where));
        return view('comics.home', ['comics' => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.createComic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:comics|string|max:250',
            'description' => 'string',
            "price"  => 'required|between:0,99.99999',
            "sale_date"  => 'date',
            "type"  => 'string|max:20'
        ]);

        $data = $request->all();

        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = 'https://source.unsplash.com/random/200x200?sig=1';
        $comic->price = $data["price"];
        $comic->series = $data["series"];
        $comic->sale_date = $data["sale_date"];
        $comic->type = $data["type"];

        // come Save prendendo l'array senza passare le proprietà
        // $comic->create($data);

        $comic->save();
        $comic = Comic::orderBy('id', 'desc')->first();
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.details', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.editComic', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string|max:250',
            'description' => 'string',
            "price"  => 'required|between:0,99.99999',
            "sale_date"  => 'date',
            "type"  => 'string|max:20'
        ]);

        $upComic = $request->all();
        $comic->update($upComic);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
