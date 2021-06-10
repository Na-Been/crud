<?php

namespace App\Http\Resources\Resource;

use Illuminate\Http\Resources\Json\Resource;

class  BlogResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'nation' => $this->nation,
            'dob' => $this->dob,
            'ed_bg' => $this->ed_bg,
            'contact_mode' => $this->contact_mode,
            'created_at' => $this->created_at->diffForHumans(),
            'updated_at' => $this->updated_at->diffForHumans()
        ];

    }
}
