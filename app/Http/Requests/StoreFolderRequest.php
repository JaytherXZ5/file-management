<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreFolderRequest extends ParentIdBaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return array_merge(parent::rules(),[
            'name' =>[
                'required',
                Rule::unique(File::class, 'name')
                ->where('created_at', Auth::id())
                ->where('parent_id', $this->parent_id)
                ->whereNull('deleted_ats')
            ],

        ]);
    }

    public function messages(){
        return [
            'name.unique' => 'Folder ":input" already exists'
        ];
    }
}


