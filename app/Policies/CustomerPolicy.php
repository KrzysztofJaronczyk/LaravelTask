<?php

namespace App\Policies;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CustomerPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Customer $customer)
    {
        return $user->id === $customer->user_id;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Customer $customer)
    {
        return $user->id === $customer->user_id;
    }

    public function delete(User $user, Customer $customer)
    {
        return $user->id === $customer->user_id;
    }
}
