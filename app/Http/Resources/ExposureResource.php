<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExposureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'month' => $this->month,
            'dose_body' => $this->dose_body,
            'dose_neck' => $this->dose_neck,
        ];
    }
}
