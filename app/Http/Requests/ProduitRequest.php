<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
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
            "codebarre"=>["required","numeric"],
            "designation"=>["required","min:6"],
            "prix_ht"=>["required","numeric"],
            "tva"=>["required","numeric"],
            "description"=>["required","min:10"],
            "image"=>["image"],
            "stock"=>["required","numeric"],
            "sous_famille_id"=>["required","numeric"],
            "marque_id"=>["required","numeric"],
            "unite_id"=>["required","numeric"],
        ];
    }
}
