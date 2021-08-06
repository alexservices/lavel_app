<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Illuminate\Http\Request;
use Session;

class Admin
{
    protected $auth;
    public function __construct(Guard $auth){
    $this->auth = $auth; 
    } 
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($this->auth->user()->id != 9){
            Session::flash('message-error','Insufficient priviliges');
            return redirect()->to('admin');
        }
        return $next($request);
    }
}
