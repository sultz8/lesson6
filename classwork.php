<?php

// Напишите функцию min
// находящую наименьшее из четырех данных чисел.

function myMin(int $a, int $b, int $c, int $d): int
{
    return 0;
}



// Напишите функцию power
// вычисляющую значение a^n

function power(int $a, int $n): int
{
    return 0;
}

// Напишите функцию xor
// реализующую функцию "Исключающее ИЛИ" двух логических переменных x и y.
// Xor должна возвращать true, если ровно один из ее аргументов x или y,
// но не оба одновременно равны true.

function myXor(int $a, int $b): bool
{
    return true;
}


// Вывести все числа от n до 1
function fromNTo1(int $n): void
{
    if ($n === 0) {
        return;
    }

    echo $n;

    fromNTo1($n - 1);
}
fromNTo1(10);


// Вывести все числа от 1 до n
function from1ToN(int $n): void
{

}


function fibonacci(int $n): int
{
    return 0;
}

function sumOfDigits(int $n): int
{
    return 0;
}

// 0 1 1 2 3 5 8 13
// 1 2 3 4 5 6 7 8



// Реализовать функцию, работающую по аналогу array_map

function cube(int $n): int
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);


function arrayMap(Closure $func, array $array): array
{
    return $array;
}


// Реализовать функцию, работающую по аналогу array_filter

$even = function (int $a) {
    return $a % 2 === 0;
};

$odd = function (int $a) {
    return $a % 2 === 0;
};

$array = [6, 7, 8, 9, 10, 11, 12];

echo "Нечётные:\n";
print_r(array_filter($array, $odd));

echo "Чётные:\n";
print_r(array_filter($array, $even));


function arrayFilter(Closure $func, array $array): array
{
    return $array;
}