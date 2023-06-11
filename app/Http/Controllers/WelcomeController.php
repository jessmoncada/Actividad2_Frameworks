<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'title' => 'Apple',
                'content' => 'Contenido del slide 1',
                'image' => (asset('images/png/origami2.png')),
            ],
            [
                'title' => 'Samsung',
                'content' => 'Contenido del slide 2',
                'image' => (asset('images/png/origami3.png')),

            ],
            [
                'title' => 'Asus',
                'content' => 'Contenido del slide 3',
                'image' => (asset('images/png/img4.png')),

            ],
            // Agrega más elementos de slide según sea necesario
        ];

        return view('welcome', compact('slides'));
    }
}
