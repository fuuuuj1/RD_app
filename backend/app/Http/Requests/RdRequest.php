<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RdRequest extends FormRequest
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
            'year' => ['required', 'max:4', 'numeric', 'between:1900,2100'],
            'month' => ['required', 'max:2', 'numeric', 'between:1,12'],
            'position_id' => ['required'],
            'dose_body' => ['nullable', 'numeric'],
            'dose_neck' => ['nullable', 'numeric'],
            'comment' => ['nullable', 'string', 'size:20'],
        ];
    }

    public function attributes()
    {
        return [
            'year' => '測定年',
            'month' => '測定月',
            'position' => '着用部位',
            'dose_body' => '体部線量',
            'dose_neck' => '頸部線量',
            'comment' => 'メモ'
        ];
    }
}
