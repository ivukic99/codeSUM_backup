<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['id', 'slug', 'name'];

    public function permissions(){
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public function hasPermissionTo(...$permssions){
        return $this->permissions()->whereIn('slug', $permssions)->count();
    }

    private function getPermissionIdsBySlug($permssions){
        return Permission::whereIn('slug', $permssions)->get()->pluck('id')->toArray();
    }

    public function givePermissionTo(...$permssions){
        $this->permissions()->attach($this->getPermissionIdsBySlug($permssions));
    }

    public function setPermissions(...$permssions){
        $this->permissions()->sync($this->getPermissionIdsBySlug($permssions));
    }

    public function detachPermissions(...$permssions){
        return $this->permissions()->detach($this->getPermissionIdsBySlug($permssions));
    }
}
