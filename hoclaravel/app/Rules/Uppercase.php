<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    public function __construct(){
        //
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
    public function passes($attribute, $value){
        if($value == mb_strtoupper($value, 'UTF-8')){

            return true;
        }else{
            return false;
        }
    }
    public function message(){
        return 'Truowng :artribute khong hop le';
    }

}
