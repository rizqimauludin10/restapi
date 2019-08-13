<?php

namespace App\Transformers;

use App\Nyuci_laundry;
use App\Nyuci_laundry_services;
use App\Transformers\ServiceTransformer;
use League\Fractal\TransformerAbstract;

class LaundryTransformer extends TransformerAbstract {

    protected $availableIncludes= [
      'service',
    ];

    public function transform(Nyuci_laundry $nyuci_laundry) {
        return [
            'laundry_id'            => $nyuci_laundry->laundry_id,
            'laundry_userid'        => $nyuci_laundry->laundry_userid,
            'laundry_locationid'    => $nyuci_laundry->laundry_locationid,
            'laundry_name'          => $nyuci_laundry->laundry_name,
            'laundry_pict'          => $nyuci_laundry->laundry_pict,
            'laundry_desc'          => $nyuci_laundry->laundry_desc,
            'laundry_phone'         => $nyuci_laundry->laundry_phone,
            'laundry_is_holiday'    => $nyuci_laundry->laundry_is_holiday,
            'laundry_address'       => $nyuci_laundry->laundry_address,
            'laundry_address_lat'   => $nyuci_laundry->laundry_address_lat,
            'laundry_address_lng'   => $nyuci_laundry->laundry_address_lng,
            'laundry_status'        => $nyuci_laundry->laundry_status,
            'registered'            => $nyuci_laundry->created_at->diffForHumans()
        ];
    }

    public function includeService(Nyuci_laundry $laundry) {
        return $this->collection($laundry->Nyuci_laundry_services(), new ServiceTransformer);
    }
}
