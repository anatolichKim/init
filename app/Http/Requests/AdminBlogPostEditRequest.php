<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminBlogPostEditRequest extends FormRequest
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
            "category_id" => "required|numeric|exists:blog_categories,id",
            "course_id" => "required|numeric|exists:blog_courses,id",
            "module_id" => "required|numeric|exists:blog_modules,id",
            "title" => "required|string|max:255",
            "description" => "string|min:3|max:1000",
            "slug" => "string|max:200",
            "text_markdown"=> "string|min:100|max:10000",
            "is_published"=>"boolean"
        ];
    }
}
