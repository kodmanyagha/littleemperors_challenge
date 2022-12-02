<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Authenticate extends Middleware
{
    /**
     * @param Request $request
     * @param Closure $next
     * @param string[] ...$guards
     *
     * @return mixed
     *
     * @throws AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards): mixed
    {
        $this->authenticate($request, $guards);

        $cacheKey  = md5($request->bearerToken());
        $cachedOtp = Cache::get($cacheKey, '');

        if ($cachedOtp === '') {
            return $next($request);
        }

        throw new AuthenticationException(
            __('error.auth.wrong_otp')
        );
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param Request $request
     *
     * @return string|null
     */
    protected function redirectTo($request): ?string
    {
        return null;
    }
}
