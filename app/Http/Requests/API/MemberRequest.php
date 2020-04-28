<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => ["required", "string"],
            "email" => ["required", "string"],
            "password" => ["required", "string"],
            "date_of_birth" => ["required", "date"],
            "gender" => ["required", "string"],
            "distance" => ["required", "integer"],
            "location" => ["required", "string"],
            "band_type" => ["required", "string"],
            "gender_pref" => ["required", "string"],
            "about_me" => ["required", "text"],

        ];
    }
}
