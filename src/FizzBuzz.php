<?php

namespace App;

class FizzBuzz
{
    public function FizzBuzz($num)
    {
        if (($num % 3 == 0 or strpos($num, 3) !== false) and ($num % 5 == 0 or strpos($num, 5) !== false)) {
            return "FizzBuzz";
        }

        if ($num % 3 == 0 or is_int(strpos($num, 3))) {
            return "Fizz";
        }

        if ($num % 5 == 0 or is_int(strpos($num, 5))) {
            return "Buzz";
        }

        return $num;
    }
}
