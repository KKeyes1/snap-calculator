<?php

function add($array) {
	return array_sum($array);
}

function subtract($array) {
	$variableOne = $array[0];
	$variableTwo  = $array[1];
	return($variableOne - $variableTwo);
}

function multiply($array) {
	return array_product($array);
}

function divide($array) {
	$variableOne = $array[0];
	$variableTwo  = 1/$array[1];
	return($variableOne * $variableTwo);
}

function mainCalculator($variableOne, $variableTwo) {
	$array = array($variableOne, $variableTwo);
	echo "the two numbers added together is " . add($array) . PHP_EOL;
	echo "the second number taken from the first number is " . subtract($array) . PHP_EOL;
	echo "the two numbers multiplied together is " . multiply($array) . PHP_EOL;
	echo "the first number divided by the second is " . divide($array) . PHP_EOL;
}

mainCalculator(10, 5);

