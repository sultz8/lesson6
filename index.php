<?php
//declare(strict_types=1);
// https://www.php.net/manual/ru/functions.user-defined.php

// Функции
// count(), max(), ...


// Объявление функции
function myFunction() // Сигнатура(первая строка в объявлении)
{
    echo "Hello" . PHP_EOL;
}

// Вызов функции.
myFunction();


// Функция с параметрами(аргументы)
function myFunctionWithArgument($name)
{
    echo $name . PHP_EOL;
}

myFunctionWithArgument('Sultan');
myFunctionWithArgument(43);
//myFunctionWithArgument(); Вызовет ошибку

// Функция с типизированными параметрами
function myFunctionWithTypeHintArgument(string $name)
{
    echo $name . PHP_EOL;
}

myFunctionWithTypeHintArgument('Sultan');
myFunctionWithTypeHintArgument(43); // Приведет к строке
// если declare(strict_types=1); будет ругаться


function mySum2(int $a, int $b)
{
    echo $a + $b;
}
mySum2(1, 5);


// Функция с параметрами по умолчанию
function myFunctionWithTypeHintArgumentDefault(string $name = 'Sultan')
{
    echo $name . PHP_EOL;
}
myFunctionWithTypeHintArgumentDefault();
myFunctionWithTypeHintArgumentDefault('Gio');


// function mySum2Default(int $a = 0, int $b) - приведет к ошибке
// Аргументы по умолчанию должны быть прижаты к правому краю
function mySum2Default(int $a, int $b = 0)
{
    echo $a + $b . PHP_EOL;
}

mySum2Default(1);
mySum2Default(1, 2);

// Передача по имени аргумента
function testFunctionOrder(string $name = '', string $surname = '', string $patronymic = '')
{
    echo $name . ' ' . $surname . ' ' . $patronymic . PHP_EOL;
};

testFunctionOrder(patronymic: 'Ivanovich');


// Передача по значению и по ссылке:
$b = 5;
function testFunctionLink(int $arg)
{
    echo "testFunctionLink: old value = $arg" . PHP_EOL;
    $arg = 0;
    echo "testFunctionLink: new value = $arg" . PHP_EOL;
}

testFunctionOrder($b);
echo $b . PHP_EOL;


function testFunctionLinkWorking(int &$arg)
{
    echo "testFunctionLink: old value = $arg" . PHP_EOL;
    $arg = 0;
    echo "testFunctionLink: new value = $arg" . PHP_EOL;
}
testFunctionLinkWorking($b);
echo $b . PHP_EOL;


// Возврат значений "return"
function testReturningFunctionSum(int $a, int $b): int // Возвращаемый тип
{
    return $a + $b; // работает как break
}

$sum = testReturningFunctionSum(10, 20);
echo $sum . PHP_EOL;


function testReturningBirthYear(int $age): int
{
    $currentYear = date('Y');

    return $currentYear - $age;
}

echo testReturningBirthYear(30) . PHP_EOL;



// Область видимости переменных
function testVisibility(): void
{
    $x = 10;
}

// echo $x; // Ошибка: Переменная $x не определена


// Глобальная область видимости:
$x = 5;

function testGlobalVisibility(): void
{
    global $x;
    echo $x . PHP_EOL;
}

testGlobalVisibility(); // Вывод: 5



// Статические переменные:
function counterStatic(): void
{
    echo "call counterStatic:" . PHP_EOL;
    static $count = 0;
    $count++;
    echo $count . PHP_EOL;
}

counterStatic(); // Вывод: 1
counterStatic(); // Вывод: 2




function manyArgs(... $args)
{
    $sum = 0;
    foreach ($args as $arg) {
        $sum += $arg;
    }

    return $sum;
}

echo manyArgs() . PHP_EOL;
echo manyArgs(1) . PHP_EOL;
echo manyArgs(1, 2) . PHP_EOL;
echo manyArgs(1, 2, 6, 19) . PHP_EOL;
echo manyArgs(1, 2, 6, 19) . PHP_EOL;







// Рекурсия