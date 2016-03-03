<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ViaticoRequest extends Request
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
            'cantidad' => 'required|numeric',
            'iva' => 'required|numeric',
            'concepto_id' => 'required|integer|exists:conceptos,id',
            'descripcion' => 'required|max:255'         
        ];
    }

    public function wantsJson() {
        return true;
    }
}
