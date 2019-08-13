<?php

namespace App\Transformers;


use App\Nyuci_laundry_services;
use League\Fractal\TransformerAbstract;

class ServiceTransformer extends TransformerAbstract {



    public function transform(Nyuci_laundry_services $nyuci_laundry_services) {
        return [
            'nyuciservice_id' => $nyuci_laundry_services->nyuciservice_id,
            'nyuciservice_laundryid' => $nyuci_laundry_services->nyuciservice_laundryid,
            'nyuciservice_serviceid' => $nyuci_laundry_services->nyuciservice_serviceid,
            'nyuciservice_price' => $nyuci_laundry_services->nyuciservice_price,
            'nyuciservice_pict' => $nyuci_laundry_services->nyuciservice_pict,
            'nyuciservice_notes' => $nyuci_laundry_services->nyuciservice_notes,
            'nyuciservice_status' => $nyuci_laundry_services->nyuciservice_status,
            'registered' => $nyuci_laundry_services->created_at->diffForHumans()
        ];
    }
}
