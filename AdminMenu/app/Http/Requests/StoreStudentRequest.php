<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "txtid"=> "required|unique:students,idstudent|min:1|max:7",
            "txtfullname"=> "required",
            "txtgender"=> "required",
            "txtemail"=> "required|email|unique:students,emailaddress",
            "txtphone"=> "required|numeric",
            "txtaddress"=> "required",
        ];
    }
}
