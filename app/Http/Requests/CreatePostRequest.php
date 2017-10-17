<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title'=>'bail|required|max:100',
            'category_id'=>'required',
            'photo_id'=>'required|mimes:jpg,jpeg,bmp,png,gif|max:3000',
            'description'=>'required'
        ];
    }
}
