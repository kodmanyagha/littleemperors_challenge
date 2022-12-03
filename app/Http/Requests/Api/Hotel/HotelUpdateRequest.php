<?php

namespace App\Http\Requests\Api\Hotel;

use Illuminate\Foundation\Http\FormRequest;

class HotelUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'string',
                'max: 1000',
            ],

            'city' => [
                'string',
            ],

            'image' => [
                'max: 1000',
            ],

            'address' => [
                'string',
                'max: 1000',
            ],

            'description' => [
                'string',
                'max: ' . (1024 * 64 - 1),
            ],

            'stars' => [
                'numeric',
                'min: 1',
                'max: 5',
            ],

            'latitude' => [
                'numeric',
            ],

            'longitude' => [
                'numeric',
            ],
        ];
    }
}
