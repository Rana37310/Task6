<?php
// Class Description: to present the converting from decimal to binary
// Author: Rana Albedaiwi
// Date : 6/20/2024


require_once 'PrimeNumber.php'; 

// Create an instance of the PrimeNumber class and specifying the initial start and end 
$start=2;
$end=30;
$primeNumbers= new PrimeNumber($start,$end);

//Printing the Prime Numbers 
$primeNumbers->show();
//Setting the start to 10 and end to 20 then printing the  Prime Numbers
$primeNumbers->setStart(10);
$primeNumbers->setEnd(20);
$primeNumbers->show();














?>