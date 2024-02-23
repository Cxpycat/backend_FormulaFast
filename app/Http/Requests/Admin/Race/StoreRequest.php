<?php

namespace App\Http\Requests\Admin\Race;

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
            'date' => 'required',
            'track_id' => 'required',
            'first_event' => 'required',
            'first_event_time' => '',
            'second_event' => 'required',
            'second_event_time' => '',
            'third_event' => 'required',
            'third_event_time' => '',
            'fourth_event' => 'required',
            'fourth_event_time' => '',
            'race_event_time' => '',
        ];
    }
}
