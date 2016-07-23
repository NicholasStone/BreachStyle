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
            'university'        => 'required|exists:universities,name',
            'secretary'         => 'required|exists:users,name',
            'secretary_summary' => 'required|max:100',
            'total_membership'  => 'required',
            'tel'               => 'required',
            'address'           => 'required|max:200',
            'summary'           => 'required|max:300',
            'apply'             => 'required',
        ];
    }
}
