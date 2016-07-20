<?php

namespace App\Http\Requests\Frontend\Party;

use App\Http\Requests\Request;

class CourseRequest extends Request
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
            'name'            => 'required|unique',
            'summary'         => 'required|max:200',
            'course_lecturer' => 'required|max:20',
            'apply'           => 'required|mimes:jpeg,jpg',
            'img'             => 'required|mimes:jpeg,gif,png',
        ];
    }
}
