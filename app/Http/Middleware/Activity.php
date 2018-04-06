<?php
namespace APP\Http\Middleware;

use Closure;
class Activity{
    public function handle($request,Closure $next)
    {
//        //前置中间件
//        if(time()<strtotime('2018-04-02')){
//            return redirect('activity0');
//        }else{
//            return $next($request);
//        }
        //后置中间件
        $response=$next($request);
        echo ($response);
        echo '我是后置操作';
    }
}