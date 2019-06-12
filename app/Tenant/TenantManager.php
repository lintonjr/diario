<?php

namespace App\Tenant;

class TenantManager
{
    private $tenant;
    private $role;
    private $entity;
    private $copy;
    /**
     * @return mixed
     */
    public function getTenant()
    {
        return $this->tenant;
    }
    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * @return mixed
     */
    public function getEntity()
    {
        return $this->entity;
    }    
    /**
     * @param mixed $tenant
     */
    public function setTenant($tenant)
    {
        $this->tenant = $tenant;
    }
    /**
     * @param mixed $tenant
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
    /**
     * @param mixed $tenant
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    }
    
    public function disableTenant()
    {
        $this->copy = $this->tenant;
        $this->tenant = null;
    }

    public function enableTenant()
    {
        $this->tenant = $this->copy;
        $this->copy = null;
    }
}