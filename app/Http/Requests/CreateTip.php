<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CreateTip extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @param Request $request
     * @return bool
     */
    public function authorize(Request $request)
    {
        return ($request->session()->has('ttv_user') && $request->session()->get('ttv_user')->is_author);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:1',
            'short' => 'required',
            'long' => 'required|min:1',
            'visible' => 'required|boolean'
        ];
    }
}
