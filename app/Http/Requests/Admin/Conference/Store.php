<?php

namespace App\Http\Requests\Admin\Conference;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() && auth()->user()->hasRole('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['nullable'],
            'start_date' => ['date',],
            'end_date' => ['date',],
            'active' => ['required', 'boolean'],
            'registration' => ['required', 'boolean'],

        ];
    }
}
