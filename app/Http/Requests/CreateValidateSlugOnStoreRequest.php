<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Str;

class CreateValidateSlugOnStoreRequest extends FormRequest
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
        if (!isset($this->slug) || empty($this->slug)) {
            //Field using in form for slug
            $forSlug = request()->input('_for_slug');

            // Add slug to request
            $this->merge(['slug' => Str::slug($this->$forSlug)]);
        };
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Get table name to check unique slug in db
        $table = request()->input('_table');


        // Validate slug
        return [
            'slug' => 'required|min:3|unique:' . $table . ',slug'
        ];
    }

    public function messages()
    {

        // Error message on unique db
        return [
            'slug.unique' => 'Такой slug или заголовок уже есть. Попробуйте его изменить.'
        ];
    }


}
