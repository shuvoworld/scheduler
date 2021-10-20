<?php

namespace App\Http\Requests;

use App\Officer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOfficerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('officer_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
