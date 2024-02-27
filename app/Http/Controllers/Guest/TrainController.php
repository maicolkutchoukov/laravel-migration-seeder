<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Train;
class TrainController extends Controller
{
    public function index()
    {
        // Recuperare tutti gli elementi di questo tipo di dato
        // Train::all() -> sulla tabella che si chiama books, esegui la query:
        // SELECT * FROM books
        $trains = Train::all();

        return view('trains.index', compact('trains'));
    }

    public function show($id)
    {
        // Recupera il singolo elemento di questo tipo di dato
        // Train::where('id', $id)->first() -> sulla tabella che si chiama Trains, esegui la query:
        // SELECT * FROM Trains WHERE id = $id
        $train = Train::where('id', $id)->first();

        return view('trains.show', compact('train'));
    }
}
