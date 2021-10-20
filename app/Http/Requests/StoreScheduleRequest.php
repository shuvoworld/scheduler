<?php

namespace App\Http\Requests;

use App\Schedule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreScheduleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('schedule_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'place' => [
                'string',
                'required',
            ],
            'time' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
        ];
    }
}
