<?php

namespace App\Policies;

use App\Models\Admin;
//use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the Admin can view the post.
     *
     * @param  \App\Admin  $Admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(Admin $user)
    {
        //
    }

    /**
     * Determine whether the Admin can create posts.
     *
     * @param  \App\Admin  $Admin
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user,1);
    }

    /**
     * Determine whether the Admin can update the post.
     *
     * @param  \App\Admin  $Admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user,2);
    }

    /**
     * Determine whether the Admin can delete the post.
     *
     * @param  \App\Admin  $Admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user,3);
    }

    /**
     * Determine whether the Admin can restore the post.
     *
     * @param  \App\Admin  $Admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function restore(Admin $user)
    {
        //
    }

    /**
     * Determine whether the Admin can permanently delete the post.
     *
     * @param  \App\Admin  $Admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function forceDelete(Admin $user)
    {
        //
    }


    public function posts(Admin $user)
    {
        return $this->getPermission($user,4);
    }


    protected function getPermission($user,$p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }

}
