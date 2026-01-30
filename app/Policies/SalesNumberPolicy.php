<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\SalesNumber;
use Illuminate\Auth\Access\HandlesAuthorization;

class SalesNumberPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:SalesNumber');
    }

    public function view(AuthUser $authUser, SalesNumber $salesNumber): bool
    {
        return $authUser->can('View:SalesNumber');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:SalesNumber');
    }

    public function update(AuthUser $authUser, SalesNumber $salesNumber): bool
    {
        return $authUser->can('Update:SalesNumber');
    }

    public function delete(AuthUser $authUser, SalesNumber $salesNumber): bool
    {
        return $authUser->can('Delete:SalesNumber');
    }

    public function restore(AuthUser $authUser, SalesNumber $salesNumber): bool
    {
        return $authUser->can('Restore:SalesNumber');
    }

    public function forceDelete(AuthUser $authUser, SalesNumber $salesNumber): bool
    {
        return $authUser->can('ForceDelete:SalesNumber');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:SalesNumber');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:SalesNumber');
    }

    public function replicate(AuthUser $authUser, SalesNumber $salesNumber): bool
    {
        return $authUser->can('Replicate:SalesNumber');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:SalesNumber');
    }

}