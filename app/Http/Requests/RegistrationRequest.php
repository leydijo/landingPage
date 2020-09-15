<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         return [
              'full_name' => 'required|max:255',
              'email' => 'required',
              'identification'=>'required|string|max:11',
              'address'=>'required|max:255',
              'comment'=>'required|max:255',
          ];
    }
}
