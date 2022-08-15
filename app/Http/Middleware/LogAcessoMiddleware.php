<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LogAcesso;
use Faker\Provider\UserAgent;

class LogAcessoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        //return $next($request);
        // dd($request->session()->all());
       // $log_sessao=$request->session()->all();
        $reqRota=$request->getRequestUri();
        $ip=$request->server->get('REMOTE_ADDR');
        // $nav=$request->header();
        LogAcesso::create([
            //'log' => $log_sessao,
                'ip_user' => $ip,
                'rotaChamada' => $reqRota]);
                // 'navegador' => $nav
        //manipulando o Response
        return $next($request);
    }
}
