<?php

namespace App\Http\Requests;

use App\Models\Infographic;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInfographicRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('infographic_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}
