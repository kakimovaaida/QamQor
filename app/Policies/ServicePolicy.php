<?php

namespace App\Policies;

use App\Models\Service;
use App\Models\User;

class ServicePolicy
{
    public function viewAny(User $user): bool
    {
        return  ($user->role->name == 'admin');
    }

    public function view(User $user): bool
    {
        return  ($user->role->name == 'admin');
    }

    public function create(User $user): bool
    {
        return  ($user->role->name == 'moderator'|| $user->role->name == 'admin');
    }

    public function update(User $user, Service $service): bool
    {
        return  ($user->role->name == 'moderator' || 'admin');
    }


    public function delete(User $user, Service $service): bool
    {
        return  ($user->role->name != 'teacher');
    }

    public function restore(User $user, Course $course): bool
    {
        return  ($user->role->name != 'teacher');
    }


    public function forceDelete(User $user, Course $course): bool
    {
        return  ($user->role->name != 'teacher');
    }

}
