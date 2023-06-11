<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |Maneja las solicitudes para restablecer la contraseña
    |
    */

    use ResetsPasswords;

    /**
     * Después de restablecer la contraseña
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
