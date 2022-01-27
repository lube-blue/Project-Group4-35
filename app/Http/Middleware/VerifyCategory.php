<?php

namespace App\Http\Middleware;

use Closure;
use App\Category;

class VerifyCategory
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
        if(Category::all()->count()==0){
            return redirect()->route('category')->with('category','ต้องมีประเภทสินค้าอย่างน้อย 1 รายการ');
        }
        return $next($request);
    }
}
