<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |Este controlador maneja las confirmaciones de contraseña
    |
    */

    use ConfirmsPasswords;

    /**
     *Cuando se presenta falla en la URL
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * 
     *Crea una nueva instancia
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
