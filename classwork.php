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