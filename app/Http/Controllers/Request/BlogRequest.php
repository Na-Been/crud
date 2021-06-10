<?php


namespace App\Http\Controllers\Request;


class BlogRequest extends ApiFormRequest
{
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
            'name' => 'required|min:5|max:255',
            'gender' => 'required|min:5|max:255',
            'phone' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255',
            'address' => 'required|min:5|max:255',
            'nation' => 'required|min:5|max:255',
            'dob' => 'required',
            'ed_bg' => 'required|min:5|max:255',
            'contact_mode' => 'required|min:5|max:255'
        ];

    }

    public function message()
    {
        return [
            'name.required' => 'Title Field is required!',
            'name.min' => 'Title should not be less than 5 characters!',
            'dob.date_format' => 'The Date Must Match The Format  MM/DD/YYYY'

        ];
    }
}
