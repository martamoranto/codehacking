<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostsCreateRequest extends Request
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
            'title'         =>'required|min:6|max:30|unique:posts,title',
            'body'          =>'required|min:6|max:30',
            'category_id'   =>'required',
            'photo_id'      =>'required'
        ];
    }
}
