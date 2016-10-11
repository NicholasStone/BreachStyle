<?php

namespace App\Http\Requests\Frontend\Party;

use App\Http\Requests\Request;

class BranchRequest extends Request
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
            'name'              => 'required',
            'avatar'            => 'required',
            'type'              => 'required|in:学生党支部,教师党支部',
            'university'        => 'required|exists:universities,name',
            'secretary'         => 'required|exists:users,name',
            'secretary_summary' => 'required|max:100',
            'total_membership'  => 'required',
            'tel'               => 'required|unique:branches,tel',
            'address'           => 'required|max:200',
            'summary'           => 'required|max:300',
            'detail'            => 'required',
            'apply'             => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'tel.unique'        => '此工作号码已存在',
            'secretary.exists'  => '此用户不存在',
            'university.exists' => '此学校不存在',
            'apply.required'    => '需要提交申请表文件',
        ];
    }
}
