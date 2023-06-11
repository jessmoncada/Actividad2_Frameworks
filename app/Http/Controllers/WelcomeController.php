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
                'content' => 'Computadores, tablets y celulares',
                'image' => (asset('images/png/apple.png')),
            ],
            [
                'title' => 'Samsung',
                'content' => 'Computadores, televisores y celulares',
                'image' => (asset('images/png/samsung.png')),

            ],
            [
                'title' => 'Asus',
                'content' => 'Computadores y tablets',
                'image' => (asset('images/png/asus.png')),

            ],

            [
                'title' => 'LG',
                'content' => 'Televisores',
                'image' => (asset('images/png/lg.png')),

            ],

        ];

        return view('welcome', compact('slides'));
    }
}
