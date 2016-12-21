<?php

use App\FizzBuzz;


class FizzBuzzTest extends PHPUnit_Framework_TestCase

{


    /** @test */

 function it_translates_1_for_fizzbuzz()
 
    {

     $test1 = new FizzBuzz();

     $this->assertEquals(1, $test1->execute(1));

    }


    /** @test */

 function it_translates_2_for_fizzbuzz()
 
    {

     $test2 = new FizzBuzz();

     $this->assertEquals(2, $test2->execute(2));

    }



    /** @test */

 function it_translates_3_for_fizzbuzz()
 
    {

     $test3 = new FizzBuzz();

     $this->assertEquals('fizz', $test3->execute(3));

    }

    /** @test */

 function it_translates_5_for_fizzbuzz()
 
    {

     $test4 = new FizzBuzz();

     $this->assertEquals('buzz', $test4->execute(5));

    }


       /** @test */

 function it_translates_6_for_fizzbuzz()
 
    {

     $test5 = new FizzBuzz();

     $this->assertEquals('fizz', $test5->execute(6));

    }

           /** @test */

 function it_translates_10_for_fizzbuzz()
 
    {

     $test6 = new FizzBuzz();

     $this->assertEquals('buzz', $test6->execute(10));

    }


           /** @test */

 function it_translates_15_for_fizzbuzz()
 
    {

     $test7 = new FizzBuzz();

     $this->assertEquals('fizzbuzz', $test7->execute(15));

    }

           /** @test */

 function it_translates_123_for_fizzbuzz()
 
    {

     $test8 = new FizzBuzz();

     $this->assertEquals('fizz', $test8->execute(123));

    }


           /** @test */

 function it_translates_a_sequence_of_numbers_for_fizzbuzz()
 
    {

     $test9 = new FizzBuzz();

     $this->assertEquals(array(1, 2, 'fizz', 4, 'buzz'), $test9->executeUpTo(5));

    }



} 
    
