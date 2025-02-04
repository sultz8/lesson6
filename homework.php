<?php

// Проверьте, является ли число простым.
// Напишите функцию определяющая является ли число просты
function isPrime(int $a): bool
{
    return true;
}


// Напишите функцию находящее максимум/минимум/сумму в массиве
// в зависимости от входящего параметра $a
// $a = 1 - максимум.
// $a = 2 - минимум.
// $a = все остальное - сумма.
function maxInArray(array $nums, int $a): int
{
    return 0;
}





// Рекурсия
// Написать функцию бинарного поиска в массиве.
function binarySearch(array $nums, int $entry, int $l, int $r): int
{
    if ($l > $r) {
        return 0;
    }
    $mid = intval(($l + $r) / 2);
    if ($nums[$mid] === $entry) {
        return $mid;
    }
    if ($nums[$mid] < $entry) {
        return binarySearch($nums, $entry,$mid + 1, $r);
    } else {
        return binarySearch($nums, $entry, $l, $mid - 1);
    }
}

echo binarySearch([3, 5, 8, 9, 11], 5, 0, 4);



// Реализовать функцию, работающую по аналогу array_reduce
// https://www.php.net/manual/ru/function.array-reduce.php
function arrayReduce(array $array, callable $callback, mixed $initial = null): mixed
{
    return 0;
}