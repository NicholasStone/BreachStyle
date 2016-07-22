<?php

namespace App\Http\Requests\Frontend\User;

use App\Http\Requests\Request;

/**
 * Class UpdateProfileRequest
 * @package App\Http\Requests\Frontend\User
 */
class BindRequest extends Request
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
            'name'       => 'required',
            'id_number'  => 'required|string|size:18',
            'type'       => 'required|in:学生,教师',
            'province'   => 'required|exists:province,name',
            'city'       => 'required|max:20',
            'university' => 'required|exists:universities,name',
            'tel_work'   => 'required',
            'tel'        => 'required',
            'email'      => 'required|email',
            'avator'     => 'required|max:1.5'
        ];
    }
}