<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class dni implements Rule
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
       $text = preg_match('/^[a-z]{3}[0-9]{6}[a-z]?$/i',$value);
	    
	    if ($text == 1){
		    return false;
	    }else{
		    return true;
	    }
    }
    

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
         return "El campo :attribute debe ser valido";
    }
}
