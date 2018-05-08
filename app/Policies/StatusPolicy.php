<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Status;

class StatusPolicy
{
    public function destroy(User $user, Status $status)
    {
        return $user->id === $status->user_id;
    }
}
