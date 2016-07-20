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
            'name' => 'required|unique',
            'type' => 'required|in:工作案例,微党课,教师党支部推荐展示,学生党支部推荐爱展示',
            'commons' => 'required|max:200',
            'detail' => 'required',
            'img' => 'required|max:2',
            'apply' => 'required',
            'video' => 'required'
        ];
    }
}
