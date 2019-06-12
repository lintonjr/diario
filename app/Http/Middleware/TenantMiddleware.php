<?php

namespace App\Http\Middleware;

use Closure;

class TenantMiddleware
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
        $user = \Auth::user();
        $tenant = $user->clients->pluck(['id']);
        $role = $user->roles->first()->name;
        
        //dd($tenant);
        \Tenant::setTenant($tenant);
        \Tenant::setRole($role);

        if ($role == "Gestor da Entidade") {
            $entity = $user->entity_id;
            \Tenant::setEntity($entity);
        }
       
        return $next($request);
    }
}
