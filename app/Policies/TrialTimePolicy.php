<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\TrialTime;
use Illuminate\Auth\Access\HandlesAuthorization;

class TrialTimePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:TrialTime');
    }

    public function view(AuthUser $authUser, TrialTime $trialTime): bool
    {
        return $authUser->can('View:TrialTime');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:TrialTime');
    }

    public function update(AuthUser $authUser, TrialTime $trialTime): bool
    {
        return $authUser->can('Update:TrialTime');
    }

    public function delete(AuthUser $authUser, TrialTime $trialTime): bool
    {
        return $authUser->can('Delete:TrialTime');
    }

    public function restore(AuthUser $authUser, TrialTime $trialTime): bool
    {
        return $authUser->can('Restore:TrialTime');
    }

    public function forceDelete(AuthUser $authUser, TrialTime $trialTime): bool
    {
        return $authUser->can('ForceDelete:TrialTime');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:TrialTime');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:TrialTime');
    }

    public function replicate(AuthUser $authUser, TrialTime $trialTime): bool
    {
        return $authUser->can('Replicate:TrialTime');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:TrialTime');
    }

}