<?php

namespace App\Validation\Rules;

class PasswordRules
{
    /**
     * This function checks whether a string contains at least:
     * this function does <b>NOT</b> do additional string length checks and is not null-safe.
     * <ul>
     *     <li>1 lowercase char</li>
     *     <li>1 uppercase char</li>
     *     <li>1 number</li>
     *     <li>1 special character</li>
     * </ul>
     * @param string $password the password to check for complexity
     * @return bool a boolean indicating if the password is complex enough.
     */
    protected function has_enough_complexity(string $password): bool
    {
        $charLowerCount = 0;
        $charUpperCount = 0;
        $charNumCount = 0;
        $charSpecialCount = 0;

        for ($i = 0; $i < strlen($password); $i++) {
            $char = ord($password[$i]);

            if ($char < 48)
                $charSpecialCount++;
            else if ($char < 58)
                $charNumCount++;
            else if ($char < 65)
                $charSpecialCount++;
            else if ($char < 91)
                $charUpperCount++;
            else if ($char < 97)
                $charSpecialCount++;
            else if ($char < 123)
                $charLowerCount++;
            else
                $charSpecialCount++;
        }

        return
            $charLowerCount > 0 and
            $charUpperCount > 0 and
            $charNumCount > 0 and
            $charSpecialCount > 0;
    }
}