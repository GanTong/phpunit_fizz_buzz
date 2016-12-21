<?php

namespace App;

class FizzBuzz {


    public function execute($number)

    {
        //if $number is 3 return fizz
        //if $number is 5 return buzz
        //otherwise return the number

        if ($number % 15 == 0) return 'fizzbuzz';

        if ($number % 3 == 0) return 'fizz';

        if ($number % 5 == 0 ) return 'buzz';


        return  $number;    
    }

    public function executeUpTo($number)

    {
        $output = [];

        foreach (range(1, $number) as $i)

        {

            $output[] = $this->execute($i);
        }

              return $output;
    }

      

}