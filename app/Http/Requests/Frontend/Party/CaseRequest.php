<?php

namespace App\Http\Requests\Frontend\Party;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;
use phpDocumentor\Reflection\Types\Mixed;

class CaseRequest extends Request
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
            'name'    => 'required|unique:applications,name',
            'summary' => 'required|max:300',
            'detail'  => 'required',
            'apply'   => 'required',
            'img'     => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'apply.required' => '请上传申请表',
            'img.required'   => '请上传封面',
        ];
    }

    /**
     * @param Validator $validator
     * @return Mixed
     */
    public function formatErrors(Validator $validator)
    {
        alert()->error($validator->errors()->all())->persistent('Close');
        return redirect()->back()->withInput();
    }
}
