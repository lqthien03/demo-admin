<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Category1Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tittle' => 'required',
            'describe' => 'required',
            'image' => 'required|image',
            'link' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'tittle.required' => 'tiêu đề không được để trống',
            'describe.required' => 'mô tả không được bỏ trống',
            'image.required' => 'Vui lòng chọn hình ảnh',
        ];
    }
}
