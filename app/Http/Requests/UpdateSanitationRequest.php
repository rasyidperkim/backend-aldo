<?php

namespace App\Http\Requests;

use App\Models\Sanitation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSanitationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sanitation_edit');
    }

    public function rules()
    {
        return [
            'kecamatan_id' => [
                'required',
                'integer',
            ],
            'secure' => [
                'required',
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'basic' => [
                'required',
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'poor' => [
                'required',
                'integer',
                'min:0',
                'max:2147483647',
            ],
        ];
    }
}
