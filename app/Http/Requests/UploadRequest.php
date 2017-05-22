<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
            'thumbnail_id' => 'required',
            'artist' => 'required',
            'name' => 'required',
            'description' => 'required',
            'media' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required'
        ];
    }
}
