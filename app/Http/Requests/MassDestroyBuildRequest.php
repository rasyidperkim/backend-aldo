<?php

namespace App\Http\Requests;

use App\Models\Build;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyBuildRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('build_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:builds,id',
        ];
    }
}
