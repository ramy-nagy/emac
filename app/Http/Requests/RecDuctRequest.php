<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecDuctRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'width'             => ['required', 'numeric', 'min:0'],
            'depth'             => ['required', 'numeric', 'min:0'],
            'length'            => ['required', 'numeric', 'min:0'],
            'thermal_thickness' => ['required', 'numeric', 'min:0'],
            'area_1_inch'       => ['required', 'numeric', 'min:0'],
            'area_2_inch'       => ['required', 'numeric', 'min:0'],
            'cladding_option'   => ['required', 'numeric', 'min:0'],
            'cladding_area'     => ['required', 'numeric', 'min:0'],
            'accoustic_option'  => ['required', 'numeric', 'min:0'],
            'accoustic_length'  => ['required', 'numeric', 'min:0'],
            'accoustic_area'    => ['required', 'numeric', 'min:0'],
            'duct_gage'         => ['required', 'numeric', 'min:0'],
            'thickness'         => ['required', 'numeric', 'min:0'],
            'duct_weight'       => ['required', 'numeric', 'min:0'],
            'pending_distance_per_side' => ['required', 'numeric', 'min:0'],
        ];
    }
}
