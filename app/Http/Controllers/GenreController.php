<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Builder;

class GenreController extends Controller
{

    public function showAll()
    {
        $data = Genre::orderBy('name', 'asc')
                    // ->get();
                    ->paginate(48);
        $books = 'none';
        return view('allGenre', ['data' => $data,'books' => $books]);
    }

    public function popularGenre(){
        $data = Genre::withCount('bookGenres')
                    ->orderBy('book_genres_count', 'desc')
                    ->orderBy('name', 'asc')
                    ->paginate(48);
                    // ->first();
        
        // dd($data[0]->bookGenres->count());
        $books = 'none';
        return view('allGenre', ['data' => $data,'books' => $books]);
    }

    public function showComicByGenre($genre)
    {
        $asd = Genre::where('name','=',$genre)->first();
        $id = $asd->id;
        $get = Book::with('bookGenres')->whereHas('bookGenres', function($q) use($id) {
            $q->where('genre_id', '=', $id);
        })->paginate(20);

        return view('bookGenre', ['data' => $get, 'filter' => $genre]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
