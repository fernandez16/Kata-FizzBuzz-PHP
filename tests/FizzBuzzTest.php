<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_fizz_if_divisible_by_3()
    {
        // Given
        $number = 6;
        $fizzBuzz = new FizzBuzz;
        // When 
        $result = $fizzBuzz->FizzBuzz($number);
        // Then
        $this->assertEquals("Fizz", $result);
    }

    public function test_fizz_if_divisible_by_5()
    {
        // Given
        $number = 10;
        $fizzBuzz = new FizzBuzz;
        // When 
        $result = $fizzBuzz->FizzBuzz($number);
        // Then
        $this->assertEquals("Buzz", $result);
    }

    public function test_fizz_buzz_if_divisible_by_3_and_5()
    {
        // Given
        $number = 60;
        $fizzBuzz = new FizzBuzz;
        // When 
        $result = $fizzBuzz->FizzBuzz($number);
        // Then
        $this->assertEquals("FizzBuzz", $result);
    }
    
    public function test_fizz_if_it_contains_3()
    {
        // Given
        $number = 31;
        $fizzBuzz = new FizzBuzz;
        // When 
        $result = $fizzBuzz->FizzBuzz($number);
        // Then
        $this->assertEquals("Fizz", $result);
    }
    
    public function test_buzz_if_it_contains_5()
    {
        // Given
        $number = 59;
        $fizzBuzz = new FizzBuzz;
        // When 
        $result = $fizzBuzz->FizzBuzz($number);
        // Then
        $this->assertEquals("Buzz", $result);
    }

    public function test_fizz_buzz_if_it_contains_3_and_5()
    {
        // Given
        $number = 53;
        $fizzBuzz = new FizzBuzz;
        // When 
        $result = $fizzBuzz->FizzBuzz($number);
        // Then
        $this->assertEquals("FizzBuzz", $result);
    }

    public function test_number_if_not_divisible_by_or_contains_3_and_5()
    {
        // Given
        $number = 4;
        $fizzBuzz = new FizzBuzz;
        // When 
        $result = $fizzBuzz->FizzBuzz($number);
        // Then
        $this->assertEquals(4, $result);
    }
}
