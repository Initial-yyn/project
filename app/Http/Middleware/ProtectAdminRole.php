<?php

namespace App\Http\Middleware;

use Closure;
use App\Role;

class ProtectAdminRole
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

        $id = $request->route('id');
        $role = Role::findOrFail($id);
        if($role->name !== 'admin'){
            return $next($request);
        }
        return response()->view('errors.403');
    }
}
