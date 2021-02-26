<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePriceRequest extends FormRequest
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

        $this->merge(['on_homepage' => intval($this->on_homepage)]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
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
                Rule::unique('prices', 'slug')
                    ->ignore($this->_old_slug, 'slug')
            ],
            'price' => 'required|numeric',
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
