<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use Illuminate\Http\Resources\Json\ResourceCollection;
use JsonSerializable;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        //  return parent::toArray($request);

            return [
                   'name' => $this->name,
                   'email' => $this->email,
               ];

        //        return [
        //          'data' => $this->collection
        //        ];

            //    return [
        
            //        'data' => $this->collection->map(function ($user){
            //            return [
            //                'name' => $user->name,
            //            ];
            //        })
            //    ];

        // return [

        //     'data' => $this->collection->map(function ($user){
        //         return [
        //             'name' => $user->name,
        //             'created_at' => $user->created_at,
        //             'email' => $user->email,
        //         ];
        //     })
        // ];

    }

    public function with($request)
    {
        return [
            'status' => 200
        ];
    }
}