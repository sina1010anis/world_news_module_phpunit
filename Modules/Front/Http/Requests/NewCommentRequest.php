<?php

namespace Modules\Front\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewCommentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'body' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا موضوع را وارد کنید',
            'body.required' => 'لطفا متن پیام را وارد کنید',
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
