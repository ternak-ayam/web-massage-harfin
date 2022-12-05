<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'digits_between:11,13', Rule::unique('users')->ignore($this->user()->id, 'id')],
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->user()->id, 'id')],
        ];
    }
}
