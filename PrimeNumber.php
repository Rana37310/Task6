<?php

class PrimeNumber
{
    private $from;
    private $to;

    //Constructor to initialize the given start and end
    public function __construct(int $start,int $end)
    {
        $this->from=$start;
        $this->to=$end;

    }

    //setters to set the start and the end
    public function setStart($start)
    {
        $this->from=$start;
    }
    public function setEnd($end)
    {
        $this->to=$end;
    }

    //Generates array of prime numbers from the specified range
    private function findPrime():array
    {

        $primes=[];
        for($i=$this->from ; $i<=$this->to ; $i++)
        {
            if($this->isPrime($i))
            {
                $primes[] = $i;
            }

        }
        return $primes;
    }
    //chekcing if the number is prime or not
    private function isPrime($num)
    {
        if($num<=1)
        return false;

        for($i=2 ; $i<= sqrt($num) ;$i++)
        {
            if($num%$i==0)
            return false;
        }
        return true;
    }

    //printing the prime number form the specified range
    public function show()
    {
        $arrayString = implode(', ', $this->findPrime());
        echo "The prime numbers from $this->from to $this->to are " . $arrayString ."\n";
    }


}


?>