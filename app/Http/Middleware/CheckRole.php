<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function handle($request, Closure $next, $role)
{
    if (auth()->user()->role !== $role) {
        abort(403);
    }
    return $next($request);
}
}
