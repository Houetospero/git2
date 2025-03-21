<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function liste()
    {
        $categories = Categorie::all();
        return view('client.categorie', [
            
                'categories' => $categories

            ]);
    }

    public function details(string $slug)
    {
        //dd($slug)
        $categorie = Categorie::where('slug','=', $slug)->first();

        return view('client.categorie-show', [
            'categorie' => $categorie
        ]);
    }
}
