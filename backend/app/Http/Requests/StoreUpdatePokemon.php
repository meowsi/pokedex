<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePokemon extends FormRequest
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
            'number' => ['required', 'integer'],
            'name' => ['required', 'min:2', 'max:255'],
            'type' => ['required', 'min:3', 'max:100'],
            'description' => ['nullable', 'min:3', 'max:9999'],
            'weight' => ['required', 'float'],
            'height' => ['required', 'float'],
        ];
    }
}
