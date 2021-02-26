<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePortfolioRequest extends FormRequest
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

        if (isset($this->img3) || !empty($this->img3)) {
            $this->merge(['img3' => intval($this->img3)]);
        }

        $this->merge(['on_homepage' => intval($this->on_homepage)]);
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
            Rule::unique('portfolio', 'slug')
                ->ignore($this->_old_slug, 'slug')
        ];
    }

    public function messages()
    {
        return [
            'slug.unique' => 'Такой slug уже есть, попробуйте его изменить'
        ];
    }


}
