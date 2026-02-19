<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function movies()
    {
        $movies = [
            'Top Gun Maverick',
            '1917 Movie',
            'Wreck it Ralph',
            'The Notebook',
            'The Shawhank Redemption',
            'The Godfather',
            'Toy Story',
            'Godzilla Minus One',
            'How to train your dragon',
            'Sinners',
            'The Wrestler',
            'The Father'
        ];
        return view('movie', ['movies' => $movies ]);
    }
}
