<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingShowRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'code' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ];
    }
}
