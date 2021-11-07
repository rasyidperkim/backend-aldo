<?php

namespace App\Http\Requests;

use App\Models\Density;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDensityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('density_edit');
    }

    public function rules()
    {
        return [
            'kelurahans_id' => [
                'required',
                'integer',
            ],
            'area' => [
                'numeric',
                'required',
            ],
            'population' => [
                'required',
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'density' => [
                'required',
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'year' => [
                'required',
            ],
        ];
    }
}
