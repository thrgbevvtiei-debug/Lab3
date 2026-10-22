<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'brand'        => ['required', 'string', 'max:50'],
            'model'        => ['required', 'string', 'max:50'],
            'year'         => ['required', 'integer', 'min:1950', 'max:' . (date('Y') + 1)],
            'price'        => ['required', 'numeric', 'min:0', 'max:99999999'],
            'mileage'      => ['required', 'integer', 'min:0'],
            'fuel_type'    => ['required', Rule::in(['Бензин', 'Дизель', 'Гібрид', 'Електро'])],
            'transmission' => ['required', Rule::in(['Механіка', 'Автомат'])],
            'color'        => ['nullable', 'string', 'max:30'],
        ];
    }
}
