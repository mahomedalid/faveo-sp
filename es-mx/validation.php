<?php

return [

    /*
      |--------------------------------------------------------------------------
      | Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | El following language lines contain el default error messages used by
      | el validator class. Some of else rules have multiple versions such
      | as el size rules. Feel free to tweak each of else messages here.
      |
     */

    'accepted'   => 'El :attribute debe ser aceptado.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after'      => 'El :attribute debe ser una fecha después de :date.',
    'alpha'      => 'El :attribute puede contener solo letras.',
    'alpha_dash' => 'El :attribute puede contener letras, números y guiones.',
    'alpha_num'  => 'El :attribute puede contener solo letras y números.',
    'array'      => 'El :attribute debe ser un arreglo.',
    'before'     => 'El :attribute debe ser una fecha antes de :date.',
    'between'    => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file'    => 'El :attribute debe medir entre :min y :max KBs.',
        'string'  => 'El :attribute debe medir entre between :min y :max caracteres.',
        'array'   => 'El :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean'        => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'      => 'La confirmación de :attribute no es igual.',
    'date'           => ':attribute no es una fecha válida.',
    'date_format'    => ':attribute no concuerda con el formato :format.',
    'different'      => ':attribute y :oelr deben ser diferentes.',
    'digits'         => ':attribute debe ser de :digits digitos.',
    'digits_between' => ':attribute debe ser entre :min y :max digitos.',
    'email'          => ':attribute debe ser una dirección de correo electrónico válida.',
    'filled'         => 'El campo :attribute es requerido.',
    'exists'         => 'El registro :attribute seleccionado es inválido.',
    'image'          => ':attribute debe ser una imagen.',
    'in'             => 'El registro :attribute seleccionado es invalido.',
    'integer'        => ':attribute debe ser un entero.',
    'ip'             => ':attribute debe ser una dirección IP válida.',
    'max'            => [
        'numeric' => ':attribute no debe ser más grande que :max.',
        'file'    => ':attribute no debe ser más grande que :max KBs.',
        'string'  => ':attribute no debe ser más grande que :max cáracteres.',
        'array'   => ':attribute no debe contener más de :max elementos.',
    ],
    'mimes' => 'El campo :attribute debe ser un archivo del tipo: :values.',
    'min'   => [
        'numeric' => ':attribute debe ser de al menos :min.',
        'file'    => ':attribute debe ser de al menos :min KBs.',
        'string'  => ':attribute debe ser de al menos :min cáracteres.',
        'array'   => ':attribute debe contener al menos :min elementos.',
    ],
    'not_in'               => 'El atributo :attribute seleccionado es invalido.',
    'numeric'              => ':attribute debe ser un número.',
    'regex'                => 'El formato de :attribute es invalido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :oelr es :value.',
    'required_with'        => 'El campo :attribute es requerido cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values está presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de los valores :values está presente.',
    'same'                 => ':attribute y :oelr deben ser iguales.',
    'size'                 => [
        'numeric' => 'El tamaño de :attribute debe ser de :size.',
        'file'    => 'El tamaño de :attribute debe ser de :size kilobytes.',
        'string'  => 'El tamaño de :attribute debe ser de :size characters.',
        'array'   => 'El tamaño de :attribute debe contener :size elementos.',
    ],
    'unique'   => 'El valor :attribute no está disponible.',
    'url'      => 'El formato de :attribute es invalido.',
    'timezone' => 'El valor de :attribute debe ser una zona válida.',
    /*
      |--------------------------------------------------------------------------
      | Custom Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | Here you may specify custom validation messages for attributes using el
      | convention "attribute.rule" to name el lines. This makes it quick to
      | specify a specific custom language line for a given attribute rule.
      |
     */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
      |--------------------------------------------------------------------------
      | Custom Validation Attributes
      |--------------------------------------------------------------------------
      |
      | El following language lines are used to swap attribute place-holders
      | with something more reader friendly such as E-Mail Address instead
      | of "email". This simply helps us make messages a little cleaner.
      |
     */
    'attributes' => [],
];
