<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Rutas que se excluyen de CSRF
     *
     * @var array
     */
    protected $except = [
        '*', 
    ];
}
