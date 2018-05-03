<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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

            'name' => 'required|string|min:6|max:12',
            'description'=>'required',
            'price'=>'required',
            'quantity'=>'required'

        ];
    }
    public function messages()
    {
      return [
        'name.required' => "Loxas ivesk Varda!!!",
        'name.min' => "Vardas per trumpas",
        'name.max' => "Vardas per ilgas",
        'description.required' => "Loxas ivesk aprasyma!!!",
        'price.required' => "Loxas ivesk kaina!!!",
        'quantity.required' => "Loxas ivesk kieki!!!",
      ];
    }
}
