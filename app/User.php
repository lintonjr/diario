<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Administrative\Role;
use App\Models\Administrative\Client;
use App\Models\Administrative\Entity;
use App\Models\Management\Agency;
use App\Tenant\TenantModels;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, TenantModels;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entity_id', 'name', 'email', 'password', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public static function createCustom($data)
    {
        $data['password'] = \bcrypt($data['password']);
		return self::create($data);
    }
    
    public static function createCustomOperational($data)
    {
        $data['password'] = \bcrypt($data['password']);
		return self::create($data);
    }
    
    public static function updateCustom($id, $data)
    {
        if (isset($data['password'])){
            $data['password'] = \bcrypt($data['password']);
        }

		return self::find($id)->update($data);
    }

    public static function updateCustomOperational($id, $data)
    {
        if (isset($data['password'])){
            $data['password'] = \bcrypt($data['password']);
        }
        
		return self::find($id)->update($data);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    public function entities()
    {
        return $this->belongsTo(Entity::class, 'entity_id');
    }

    public function agencies()
    {
        return $this->belongsToMany(Agency::class, 'agency_user');
    }
    
    public function isAdmin()
    {
        return $this->existsRole('Administrador');
    }

    public function addRole($role)
    {
        if(is_string($role)){
            $role = Role::where('name', $role)->firstOrFail();
        }
        
        if($this->existsRole($role)){
            return;
        }

        return $this->roles()->attach($role);
    }
    
    public function removeRole($role)
    {
        if(is_string($role)){
            $role = Role::where('name', $role)->firstOrFail();
        }

        return $this->roles()->detach($role);
    }
    
    public function existsRole($role)
    {
        if(is_string($role)){
            $role = Role::where('name', $role)->firstOrFail();
        }

        return (boolean) $this->roles()->find($role->id);
    }
    
    public function addClient($client)
    {
        if(is_string($client)){
            $client = Client::where('name', $client)->firstOrFail();
        }
        if($this->existsClient($client)){
            return;
        }

        return $this->clients()->attach($client);
    }
    
    public function removeClient($client)
    {
        if(is_string($client)){
            $client = Client::where('name', $client)->firstOrFail();
        }

        return $this->clients()->detach($client);
    }
    
    public function existsClient($client)
    {
        if(is_string($client)){
            $client = Client::where('name', $client)->firstOrFail();
        }

        return (boolean) $this->clients()->find($client->id);
    }

    public function existsThisRole($roles)
    {
        $userRoles = $this->roles;
        return $roles->intersect($userRoles)->count();
    }

}
