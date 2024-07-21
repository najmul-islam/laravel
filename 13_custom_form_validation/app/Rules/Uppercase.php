<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    public function __construct()
    {
        //
    }


    public function passes($attribute, $value)
    {
        $uppserData = strtoupper($value);
        return $uppserData === $value;
    }

    public function message()
    {
        return 'The :attribute must be uppercase.';
    }
}