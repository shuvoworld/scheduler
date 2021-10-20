<?php

namespace App\Http\Requests;

use App\Officer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOfficerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('officer_edit');
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
