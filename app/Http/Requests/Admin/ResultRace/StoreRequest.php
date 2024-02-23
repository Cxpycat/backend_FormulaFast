<?php

namespace App\Http\Requests\Admin\ResultRace;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'race_id' => 'required',
            'fastest_lap' => 'required',
            'place_1' => 'required',
            'place_2' => 'required',
            'place_3' => 'required',
            'place_4' => 'required',
            'place_5' => 'required',
            'place_6' => 'required',
            'place_7' => 'required',
            'place_8' => 'required',
            'place_9' => 'required',
            'place_10' => 'required',
            'place_11' => 'required',
            'place_12' => 'required',
            'place_13' => 'required',
            'place_14' => 'required',
            'place_15' => 'required',
            'place_16' => 'required',
            'place_17' => 'required',
            'place_18' => 'required',
            'place_19' => 'required',
            'place_20' => 'required',
        ];
    }
}
