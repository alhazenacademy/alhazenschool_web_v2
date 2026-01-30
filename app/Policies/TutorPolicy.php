<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Tutor;
use Illuminate\Auth\Access\HandlesAuthorization;

class TutorPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Tutor');
    }

    public function view(AuthUser $authUser, Tutor $tutor): bool
    {
        return $authUser->can('View:Tutor');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Tutor');
    }

    public function update(AuthUser $authUser, Tutor $tutor): bool
    {
        return $authUser->can('Update:Tutor');
    }

    public function delete(AuthUser $authUser, Tutor $tutor): bool
    {
        return $authUser->can('Delete:Tutor');
    }

    public function restore(AuthUser $authUser, Tutor $tutor): bool
    {
        return $authUser->can('Restore:Tutor');
    }

    public function forceDelete(AuthUser $authUser, Tutor $tutor): bool
    {
        return $authUser->can('ForceDelete:Tutor');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Tutor');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Tutor');
    }

    public function replicate(AuthUser $authUser, Tutor $tutor): bool
    {
        return $authUser->can('Replicate:Tutor');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Tutor');
    }

}