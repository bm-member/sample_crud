<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'ခေါင်းစဉ်ထည့်ရန်လိုအပ်သည်။',
            'title.min' => 'အနည်းဆုံး စာလုံး ၅ လုံးထည့်ပါ။',
            'content.required' => 'အကြောင်းအရာထည့်ပါ။'
        ];
    }
}
