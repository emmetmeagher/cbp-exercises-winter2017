<?php

function divide($number_1, $number_2, & $remainder)
{
    $remainder = $number_1 % $number_2;
	return $number_1/$number_2;
}

$results_of_division = divide(3, 2, $my_remainder);

$results_of_division; //1.5

$my_remainder; //1