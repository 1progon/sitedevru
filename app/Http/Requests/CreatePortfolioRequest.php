<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Str;

class CreatePortfolioRequest extends FormRequest
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
        //Add slug to request
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
            'on_homepage' => 'required|boolean',
            'description' => 'required|min:3',
            'url' => 'nullable|url',
            'slug' => 'required|min:3|unique:portfolio,slug',
        ];
    }

    public function messages()
    {
        return [
            'slug.unique' => 'Кажется такой slug или заголовок уже есть, попробуйте его изменить'
        ];
    }


}
