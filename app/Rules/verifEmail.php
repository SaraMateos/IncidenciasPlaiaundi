<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class verifEmail implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return (preg_match('/([a-zA-Z]+)@plaiaundi\.(com|net)$/' , $value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El formato del :attribute no es valido. Debe de ser ...@plaiaundi.net/.com o ..@plaiaundi.net/.com';
    }
}
