<?php

namespace App\Http\Requests;

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
        switch($this->method())
        {
            case 'POST':
            {
                return [
                    'name' => 'required',
                    'nif' => 'required|unique:stores,nif',
                    'address' => 'required|max:255',
                    'postal_c' => 'required|max:5', 
                    'email' => 'required|email|unique:stores,email',
                    'phone' => 'required|max:9',
                    'id_cat' => 'required|numeric',
                    's_lat' => 'required|numeric',
                    's_long' => 'required|numeric',
                    's_url' => 'required|max:255',
                    'discount' => 'required|numeric|min:2,00',
                    'logo' => 'image'
                ];
            }
            case 'PATCH':
            {
                return [
                    'name' => 'required',
                    'nif' => 'required|unique:stores,nif,'.$this->get('id'),
                    'address' => 'required|max:255',
                    'postal_c' => 'required|max:5',
                    'email' => 'required|email|unique:stores,email,'.$this->get('id'),
                    'phone' => 'required|max:9',
                    'id_cat' => 'required|numeric',
                    's_lat' => 'required|numeric',
                    's_long' => 'required|numeric',
                    's_url' => 'required|max:255',
                    'discount' => 'required|numeric|min:2,00',
                    'logo' => 'image'
                ];
            }
        }
    }
}
