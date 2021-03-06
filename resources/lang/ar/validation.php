<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | ال following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'ال :attribute يجب أن يتم قبلولة.',
    'accepted_if' => 'ال :attribute يجب ان يتم قبولة عندما :other هو :value.',
    'active_url' => 'ال :attribute مسار رابط غير صالح .',
    'after' => 'ال :attribute يجب أن يكون تاريخا صالحا بعد :date.',
    'after_or_equal' => 'ال :attribute يجب أن يكون تاريخا قادما أو يساوي :date.',
    'alpha' => 'ال :attribute يجب أن يحتوي فقط علي حروف.',
    'alpha_dash' => 'ال :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'ال :attribute must only contain letters and numbers.',
    'array' => 'ال :attribute must be an array.',
    'before' => 'ال :attribute must be a date before :date.',
    'before_or_equal' => 'ال :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'ال :attribute must be between :min and :max.',
        'file' => 'ال :attribute must be between :min and :max kilobytes.',
        'string' => 'ال :attribute must be between :min and :max characters.',
        'array' => 'ال :attribute must have between :min and :max items.',
    ],
    'boolean' => 'ال :attribute field must be true or false.',
    'confirmed' => 'ال :attribute confirmation does not match.',
    'current_password' => 'ال password is incorrect.',
    'date' => 'ال :attribute is not a valid date.',
    'date_equals' => 'ال :attribute must be a date equal to :date.',
    'date_format' => 'ال :attribute does not match the format :format.',
    'declined' => 'ال :attribute must be declined.',
    'declined_if' => 'ال :attribute must be declined when :other is :value.',
    'different' => 'ال :attribute and :other must be different.',
    'digits' => 'ال :attribute must be :digits digits.',
    'digits_between' => 'ال :attribute must be between :min and :max digits.',
    'dimensions' => 'ال :attribute has invalid image dimensions.',
    'distinct' => 'ال :attribute field has a duplicate value.',
    'email' => 'ال :attribute must be a valid email address.',
    'ends_with' => 'ال :attribute must end with one of the following: :values.',
    'exists' => 'ال selected :attribute is invalid.',
    'file' => 'ال :attribute must be a file.',
    'filled' => 'ال :attribute field must have a value.',
    'gt' => [
        'numeric' => 'ال :attribute must be greater than :value.',
        'file' => 'ال :attribute must be greater than :value kilobytes.',
        'string' => 'ال :attribute must be greater than :value characters.',
        'array' => 'ال :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'ال :attribute must be greater than or equal to :value.',
        'file' => 'ال :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'ال :attribute must be greater than or equal to :value characters.',
        'array' => 'ال :attribute must have :value items or more.',
    ],
    'image' => 'ال :attribute must be an image.',
    'in' => 'ال selected :attribute is invalid.',
    'in_array' => 'ال :attribute field does not exist in :other.',
    'integer' => 'ال :attribute must be an integer.',
    'ip' => 'ال :attribute must be a valid IP address.',
    'ipv4' => 'ال :attribute must be a valid IPv4 address.',
    'ipv6' => 'ال :attribute must be a valid IPv6 address.',
    'json' => 'ال :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'ال :attribute must be less than :value.',
        'file' => 'ال :attribute must be less than :value kilobytes.',
        'string' => 'ال :attribute must be less than :value characters.',
        'array' => 'ال :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'ال :attribute must be less than or equal to :value.',
        'file' => 'ال :attribute must be less than or equal to :value kilobytes.',
        'string' => 'ال :attribute must be less than or equal to :value characters.',
        'array' => 'ال :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'ال :attribute must not be greater than :max.',
        'file' => 'ال :attribute must not be greater than :max kilobytes.',
        'string' => 'ال :attribute must not be greater than :max characters.',
        'array' => 'ال :attribute must not have more than :max items.',
    ],
    'mimes' => 'ال :attribute must be a file of type: :values.',
    'mimetypes' => 'ال :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'ال :attribute must be at least :min.',
        'file' => 'ال :attribute must be at least :min kilobytes.',
        'string' => 'ال :attribute must be at least :min characters.',
        'array' => 'ال :attribute must have at least :min items.',
    ],
    'multiple_of' => 'ال :attribute must be a multiple of :value.',
    'not_in' => 'ال selected :attribute is invalid.',
    'not_regex' => 'ال :attribute format is invalid.',
    'numeric' => 'ال :attribute must be a number.',
    'password' => 'ال password is incorrect.',
    'present' => 'ال :attribute field must be present.',
    'prohibited' => 'ال :attribute field is prohibited.',
    'prohibited_if' => 'ال :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'ال :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'ال :attribute field prohibits :other from being present.',
    'regex' => 'ال :attribute format is invalid.',
    'required' => 'ال :attribute field is required.',
    'required_if' => 'ال :attribute field is required when :other is :value.',
    'required_unless' => 'ال :attribute field is required unless :other is in :values.',
    'required_with' => 'ال :attribute field is required when :values is present.',
    'required_with_all' => 'ال :attribute field is required when :values are present.',
    'required_without' => 'ال :attribute field is required when :values is not present.',
    'required_without_all' => 'ال :attribute field is required when none of :values are present.',
    'same' => 'ال :attribute و :other يجب أن يكونوا متطابقين.',
    'size' => [
        'numeric' => 'ال :attribute يجب أن يكون :size.',
        'file' => 'ال :attribute يجب أن يكون :size kilobytes.',
        'string' => 'ال :attribute يجب أن يكون :size حروف.',
        'array' => 'ال :attribute يجب أن تحتوي :size قطع.',
    ],
    'starts_with' => 'ال :attribute يجب أن تبدأ بواحد من التالي: :values.',
    'string' => 'ال :attribute يجب أن تكون نصا.',
    'timezone' => 'ال :attribute يجب أن تكون منطقة زمنية صالحة.',
    'unique' => 'ال :attribute تم أخذة بالفعل.',
    'uploaded' => 'ال :attribute فشل في الرفع.',
    'url' => 'ال :attribute يجب أن يكون عنوان url صالحا.',
    'uuid' => 'ال :attribute يجب أن يكون صالحا UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | ال following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
