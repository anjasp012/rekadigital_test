<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        if (request()->routeIs('programs.update')) {
            return [
                'name' => 'required',
                'photo' => 'nullable|image',
                'description' => 'required',
                'meeting' => 'required',
                'month' => 'required'
            ];
        }
        return [
            'name' => 'required',
            'photo' => 'required|image',
            'description' => 'required',
            'meeting' => 'required',
            'month' => 'required'
        ];
    }
}
