<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTemplateRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        // Checkboxes from string to integer
        if (isset($this->img) || !empty($this->img)) {
            $this->merge(['img' => intval($this->img)]);
        }

        if (isset($this->img2) || !empty($this->img2)) {
            $this->merge(['img2' => intval($this->img2)]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Validate date
        return [
            'title' => 'required|min:3',
            'slug' => [
                'required',
                'min:3',
                Rule::unique('templates', 'slug')
                    ->ignore($this->_old_slug, 'slug')
            ],
            'description' => 'required|min:3',
        ];
    }
}
