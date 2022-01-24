<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BudgetRequest extends FormRequest
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
            'client'      => 'bail|required|min:3|max:45',
            'seller'      => 'bail|required|min:3|max:45',
            'description' => 'bail|required|min:4|max:50',
            'value'       => 'bail|required|numeric|min:1'
        ];
    }

    public function messages()
    {
        return [
            'client.required'      => 'O campo "Nome do Cliente" é obrigatótio',
            'client.min'           => 'Por gentileza, digite um nome de cliente com mais de 3 letras',
            'client.max'           => 'Por gentileza, digite um nome de cliente com menos de 45 letras',
            'seller.required'      => 'O campo "Nome do Vendedor" é obrigatótio',
            'seller.min'           => 'Por gentileza, digite um nome de vendedor com mais de 3 letras',
            'seller.max'           => 'Por gentileza, digite um nome de Vendedor com menos de 45 letras',
            'description.required' => 'O campo "Nome do Cliente" é obrigatótio',
            'description.min'      => 'Por gentileza, digite uma descrição maior',
            'description.max'      => 'Por gentileza, digite uma descrição menor',
            'value.required'       => 'O campo "Valor do Produto/Serviço" é obrigatótio',
            'value.min'            => 'O valor inserido no campo "Valor do Produto/Serviço" deve ser maior ou igual a "1"',
        ];
    }
}
