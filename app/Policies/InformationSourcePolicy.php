<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\InformationSource;
use Illuminate\Auth\Access\HandlesAuthorization;

class InformationSourcePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:InformationSource');
    }

    public function view(AuthUser $authUser, InformationSource $informationSource): bool
    {
        return $authUser->can('View:InformationSource');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:InformationSource');
    }

    public function update(AuthUser $authUser, InformationSource $informationSource): bool
    {
        return $authUser->can('Update:InformationSource');
    }

    public function delete(AuthUser $authUser, InformationSource $informationSource): bool
    {
        return $authUser->can('Delete:InformationSource');
    }

    public function restore(AuthUser $authUser, InformationSource $informationSource): bool
    {
        return $authUser->can('Restore:InformationSource');
    }

    public function forceDelete(AuthUser $authUser, InformationSource $informationSource): bool
    {
        return $authUser->can('ForceDelete:InformationSource');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:InformationSource');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:InformationSource');
    }

    public function replicate(AuthUser $authUser, InformationSource $informationSource): bool
    {
        return $authUser->can('Replicate:InformationSource');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:InformationSource');
    }

}