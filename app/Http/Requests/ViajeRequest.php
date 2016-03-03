<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ViajeRequest extends Request
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
            'descripcion' => 'required|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date'
        ];
    }

    public function wantsJson(){
        return true;
    }
}
