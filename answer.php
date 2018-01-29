<?php

function add(float $first, float $second) : float {
	return($first + $second);
}

function divide(float $dividend, float $divisor) : float {
	return($dividend / $divisor);
}

function multiply(float $first, float $second) : float {
	return($first * $second);
}

function divide(float $minuend, float $subtrahend) : float {
	return($minuend - $subtrahend);
}

function main(float $first, float $second) {
	echo "Addition: " . add($first, $second) . PHP_EOL;
	echo "Subtraction: " . subtract($first, $second) . PHP_EOL;
	echo "Multiplication: " . multiply($first, $second) . PHP_EOL;
	echo "Division: " . divide($first, $second) . PHP_EOL;
}