<?php

namespace App\Policies;

use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the Admin can view the permission.
     *
     * @param  \App\Admin  $Admin
     * @param  \App\Permission  $permission
     * @return mixed
     */
    public function permissions(Admin $Admin)
    {
        return $this->getPermission($Admin,11);
    }


    protected function getPermission($Admin,$p_id)
    {
        foreach ($Admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
