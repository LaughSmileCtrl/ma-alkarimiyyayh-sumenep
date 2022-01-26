<?php

namespace App\Http\Middleware;

use App\Models\PpdbSetting;
use Closure;
use DateTimeZone;
use Illuminate\Http\Request;

class PpdbdMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $config = PpdbSetting::first();

        if (now(new DateTimeZone('Asia/Jakarta')) < $config->open
                || now(new DateTimeZone('Asia/Jakarta')) > $config->close) {
            return redirect()->route('ppdb.index');
        }

        return $next($request);
    }
}
