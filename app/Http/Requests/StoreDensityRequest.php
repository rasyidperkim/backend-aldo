<?php

namespace App\Http\Requests;

use App\Models\Density;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDensityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('density_create');
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
                'min:-2147483648',
                'max:2147483647',
            ],
            'density' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'year' => [
                'required',
            ],
        ];
    }
}
