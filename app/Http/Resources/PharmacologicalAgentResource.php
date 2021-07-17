<?php

namespace App\Http\Resources;

use App\Models\PharmacologicalAgent;
use Illuminate\Http\Resources\Json\JsonResource;

class PharmacologicalAgentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var PharmacologicalAgent $agent */
        $agent = $this;
        return [
            'id' => $agent->id,
            'productName' => $agent->productName,
            'active_substance' => $agent->active_substance->productName,
            'manufacturer' => $agent->manufacturer->companyName,
            'price' => $agent->price
        ];
    }
}
