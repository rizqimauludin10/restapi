<?php

namespace App\Transformers;

use App\Nyuci_users;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract {
    public function transform(Nyuci_users $user) {
        return [
            'email' => $user->email,
            'password' => $user->password,
            'name' => $user->name,
            'pict' => $user->pict,
            'phone' => $user->phone,
            'status' => $user->status,
            'level' => $user->level,
            'registered' => $user->created_at->diffForHumans()
        ];
    }
}
