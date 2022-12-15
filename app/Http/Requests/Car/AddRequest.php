<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'vin' => 'required_if:year,null',
            'year' => 'required_if:vin,null',
            'make' => 'required_if:vin,null',
            'model' => 'required_if:vin,null',
        ];
    }
}
