<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Str;

class CreateTemplateRequest extends FormRequest
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
        // Add slug to request
        $this->merge(['slug' => Str::slug($this->title)]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'cms' => 'required',
            'slug' => 'required|min:3|unique:templates,slug',
            'url_original_link' => 'nullable|url',
            'description' => 'required|min:3',
        ];
    }

    public function messages()
    {
        // Error message on unique db
        return [
            'slug.unique' => 'Такой slug("' . $this->slug . '") или заголовок уже есть. Попробуйте его изменить.'
        ];
    }
}
