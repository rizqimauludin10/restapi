<?php

namespace App\Transformers;

use App\Nyuci_users;
use League\Fractal\TransformerAbstract;
use App\Transformers\LaundryTransformer;

class UserTransformer extends TransformerAbstract {

    protected $availableIncludes = [
        'laundry'
        ];

    public function transform(Nyuci_users $user) {
        return [
            'id' => $user->id,
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
    public function includeLaundry(Nyuci_users $nyuci_users) {
        $laundry  = $nyuci_users->laundry();

        return $this->collection($laundry, new LaundryTransformer());

    }
}
