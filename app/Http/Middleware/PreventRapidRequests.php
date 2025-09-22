<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class PreventRapidRequests
{
    public function handle($request, Closure $next)
    {
        // oturum açmamışsa ip üzerinden de çalışabilir
        $userKey = $request->user()
            ? 'user:' . $request->user()->id
            : 'ip:' . $request->ip();

        // route adı + kullanıcı id/ip birleşimi = benzersiz anahtar
        $key = 'lock:' . $userKey . ':' . $request->route()->getName();

        // 3 saniyelik kilit süresi örnek (isteğe göre azalt/çoğalt)
        $seconds = 3;

        if (Cache::has($key)) {
            // ikinci ve sonraki istekler engellenir
           return back()->withErrors(['error' => 'Çok hızlı işlem yapıyorsunuz, lütfen biraz bekleyin.']);
        }

        // ilk istekte kilidi koy
        Cache::put($key, true, $seconds);

        return $next($request);
    }
}
