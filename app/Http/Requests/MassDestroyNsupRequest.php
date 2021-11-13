<?php

namespace App\Http\Requests;

use App\Models\Nsup;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyNsupRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('nsup_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:nsups,id',
        ];
    }
}
