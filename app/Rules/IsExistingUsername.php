<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class IsExistingUsername implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $string = preg_replace('/\s+/', '', $value);
        $search = DB::select("select * from users where username = ?", array($string));
        if (!$search) {
            $fail("Username does not exist");
        } else {
            // ...
            echo "ok";
        }
    }
}
