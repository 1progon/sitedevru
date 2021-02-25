<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //TODO Add authorize logic
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        // Validate date
        return [
            'title' => 'required|min:3',
            'slug' => [
                'required',
                'min:3',
                Rule::unique('pages', 'slug')
                    ->ignore($this->_old_slug, 'slug')
            ],
            'description' => 'required|min:3',
        ];
    }

    public function messages(): array
    {
        // Error message on unique db
        return [
            'slug.unique' => 'Такой slug("' . $this->slug . '") уже есть. Попробуйте его изменить.'
        ];
    }
}
