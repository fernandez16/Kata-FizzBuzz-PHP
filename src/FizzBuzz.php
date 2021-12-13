<?php

namespace App;

class FizzBuzz
{

    public function FizzBuzz($num)
    {
        $Fizz = "";
        $Buzz = "";

        if (($num % 3 == 0) or (strpos($num, '3')) !== false) {
            $Fizz = "Fizz";
        }

        if (($num % 5 == 0) or (strpos($num, '5')) !== false) {
            $Buzz = "Buzz";
        }

        $FizzBuzz = $Fizz . $Buzz;

        if ($FizzBuzz === "") {
            return $num;
        }

        return $FizzBuzz;
    }
}
