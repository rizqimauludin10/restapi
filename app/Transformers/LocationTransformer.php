<?php

namespace App\Transformers;

use App\Nyuci_laundry;
use App\Nyuci_laundry_services;
use App\Nyuci_locations;
use App\Transformers\ServiceTransformer;
use League\Fractal\TransformerAbstract;

class LocationTransformer extends TransformerAbstract {

    public function transform(Nyuci_locations $nyuci_locations) {
        return [
            'location_id'       => $nyuci_locations->location_id,
            'location_type'     => $nyuci_locations->location_type,
            'location_postcode' => $nyuci_locations->location_postcode,
            'location_name'     => $nyuci_locations->location_name,
            'location_desc'     => $nyuci_locations->location_desc,
            'created_at'        => $nyuci_locations->created_at->diffForHumans()
        ];
    }
}
