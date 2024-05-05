<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class IsUniqueUsername implements ValidationRule
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
            //$fail('"'.$string.'"'." wow, there is no so user, you can pass!");
        } else {
            $fail("The username has already been Taken");
        }
        // echo 'User IP - '.$_SERVER['REMOTE_ADDR']."</br>";

        #("The username is already taken, fuck!");
    }

    public function passes($attribute, mixed $value): bool
    {
        return false;
    }

    public function message()
    {
        return '';
    }
}
