<?php

namespace App\Http\Requests;

use App\Traits\CustomErrorMessage;
use Illuminate\Foundation\Http\FormRequest;

class ProductFilterRequest extends FormRequest
{
    use CustomErrorMessage;

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
        $rules = [
            'weight_from' => 'numeric',
            'weight_to' => 'numeric',
            'price_from' => 'numeric',
            'price_to' => 'numeric'
        ];

        return $rules;
    }
}
