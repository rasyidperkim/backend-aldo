<?php

namespace App\Http\Requests;

use App\Models\BuildGallery;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBuildGalleryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('build_gallery_create');
    }

    public function rules()
    {
        return [];
    }
}
