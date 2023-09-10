<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestNewPostRequest extends FormRequest
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
            'image_min' => 'required',
            'image_max_mobile' => 'required',
            'image_max_pc' => 'required',
            'body' => 'required',
            'user_id' => 'required',
            'menu_id' => 'required',
            'select' => 'required',
            'like' => 'required',
            'view' => 'required',
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
