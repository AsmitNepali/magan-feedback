<?php

namespace Magan\Feedback\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'fullname' => [
                'required',
                'min:3',
                'max:55',
            ],
            'email' => [
                'required',
                'email',
                'min:5',
                'max:155',
            ],
            'subject' => [
                'required',
                'min:5',
                'max:255',
            ],
            'message' => [
                'required',
                'min:5',
                'max:1000',
            ],
        ];
    }
}
