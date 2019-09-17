<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class authFormRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize () {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules () {

        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ];

        //mailer
        Mail::to($email) -> send (new)

        flash ('message of approval has been sent') -> success (new registerMail ($user));

        return $user;
        return redirect () -> route ('auth.register');
    }
}
