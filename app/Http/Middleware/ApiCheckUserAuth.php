<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Facades\JWTAuth;
class ApiCheckUserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user=null;
        try{
        $user = JWTAuth::parseToken()->authenticate();
        }catch(Exception $e){
            if($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException)
            return returnError("404",$e->getMessage());
        else if($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException)
            return returnError("404",$e->getMessage());
         else if($e instanceof \ Tymon\JWTAuth\Exceptions\TokenBlacklistedException)
            return returnError("404",$e->getMessage());
        else
        return returnError("404","Token Not Found");
        }catch(\Throwable $e){
       if($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException)
            return returnError("404",$e->getMessage());
         else if($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException)
            return returnError("404",$e->getMessage());
         else if($e instanceof \ Tymon\JWTAuth\Exceptions\TokenBlacklistedException)
            return returnError("404",$e->getMessage());
        else
         return returnError("404","Token Not Found");
    
   
            
        }
if(!$user){
 return returnError("404","You Unauthentcated");
}
        return $next($request);
    }
}
