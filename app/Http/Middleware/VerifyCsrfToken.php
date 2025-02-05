<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
    protected function handleInvalidCsrfToken($request, $next)
{
    if ($request->expectsJson()) {
        return response()->json(['message' => 'CSRF token mismatch'], 419);
    }

    return redirect()->route('login');
}
}
