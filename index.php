<?php
//declare(strict_types=1);
// https://www.php.net/manual/ru/functions.user-defined.php

// Функции
// count(), max(), ...


//// Объявление функции
//function myFunction() // Сигнатура(первая строка в объявлении)
//{
//    echo "Hello" . PHP_EOL;
//}
//
//// Вызов функции.
//myFunction();
//
//
//// Функция с параметрами(аргументы)
//function myFunctionWithArgument($name)
//{
//    echo $name . PHP_EOL;
//}
//
//myFunctionWithArgument('Sultan');
//myFunctionWithArgument(43);
////myFunctionWithArgument(); Вызовет ошибку
//
//// Функция с типизированными параметрами
//function myFunctionWithTypeHintArgument(string $name)
//{
//    echo $name . PHP_EOL;
//}
//
//myFunctionWithTypeHintArgument('Sultan');
//myFunctionWithTypeHintArgument(43); // Приведет к строке
//// если declare(strict_types=1); будет ругаться
//
//
//function mySum2(int $a, int $b)
//{
//    echo $a + $b;
//}
//mySum2(1, 5);
//
//
//// Функция с параметрами по умолчанию
//function myFunctionWithTypeHintArgumentDefault(string $name = 'Sultan')
//{
//    echo $name . PHP_EOL;
//}
//myFunctionWithTypeHintArgumentDefault();
//myFunctionWithTypeHintArgumentDefault('Gio');
//
//
//// function mySum2Default(int $a = 0, int $b) - приведет к ошибке
//// Аргументы по умолчанию должны быть прижаты к правому краю
//function mySum2Default(int $a, int $b = 0)
//{
//    echo $a + $b . PHP_EOL;
//}
//
//mySum2Default(1);
//mySum2Default(1, 2);
//
//// Передача по имени аргумента
//function testFunctionOrder(string $name = '', string $surname = '', string $patronymic = '')
//{
//    echo $name . ' ' . $surname . ' ' . $patronymic . PHP_EOL;
//};
//
//testFunctionOrder(patronymic: 'Ivanovich');
//
//
//// Передача по значению и по ссылке:
$b = 5;
function testFunctionLink(int $arg)
{
    echo "testFunctionLink: old value = $arg" . PHP_EOL;
    $arg = 0;
    echo "testFunctionLink: new value = $arg" . PHP_EOL;
}
//
//testFunctionOrder($b);
//echo $b . PHP_EOL;
//
//
function testFunctionLinkWorking(int &$arg)
{
    echo "testFunctionLink: old value = $arg" . PHP_EOL;
    $arg = 0;
    echo "testFunctionLink: new value = $arg" . PHP_EOL;
}
//testFunctionLinkWorking($b);
//echo $b . PHP_EOL;
//
//
//// Возврат значений "return"
function testReturningFunctionSum(int $a, int $b): int // Возвращаемый тип
{
    return $a + $b; // работает как break
}
//
//$sum = testReturningFunctionSum(10, 20);
//echo $sum . PHP_EOL;
//
//
function testReturningBirthYear(int $age): int
{
    $currentYear = date('Y');

    return $currentYear - $age;
}
//
//echo testReturningBirthYear(30) . PHP_EOL;
//
//
//
// Область видимости переменных
function testVisibility(): void
{
    $x = 10;
}
//
//// echo $x; // Ошибка: Переменная $x не определена
//
//
//// Глобальная область видимости:
$x = 5;
//
function testGlobalVisibility(): void
{
    global $x;
    echo $x . PHP_EOL;
}
//
//testGlobalVisibility(); // Вывод: 5



// Статические переменные:
function counterStatic(): void
{
    echo "call counterStatic:" . PHP_EOL;
    static $count = 0;
    $count++;
    echo $count . PHP_EOL;
}
//
//counterStatic(); // Вывод: 1
//counterStatic(); // Вывод: 2
//
//
//
//
function manyArgs(... $args)
{
    $sum = 0;
    foreach ($args as $arg) {
        $sum += $arg;
    }

    return $sum;
}
//
//echo manyArgs() . PHP_EOL;
//echo manyArgs(1) . PHP_EOL;
//echo manyArgs(1, 2) . PHP_EOL;
//echo manyArgs(1, 2, 6, 19) . PHP_EOL;
//echo manyArgs(1, 2, 6, 19) . PHP_EOL;




// n = 5
// 5! = 1 * 2 * 3 * 4 * 5
// 5! = 4! * 5
// 5! = 3! * 4 * 5

// Рекурсия
// n! = 1 * 2 * 3 * ... * (n - 1) * n
// n! = (n - 1)! * n
// n! = (n - 2)! * (n - 1) * n

function testRecursion(int $n): void // n = 0
{
    if ($n === 0) {
        return;
    }

    echo "testRecursion$n:" . PHP_EOL;

    testRecursion($n - 1); // n = 1
}

//testRecursion(5);
// testRecursion5: echo "testRecursion5:" . PHP_EOL;
    // testRecursion4: echo "testRecursion4:" . PHP_EOL;
        // testRecursion3: echo "testRecursion3:" . PHP_EOL;
            // testRecursion2: echo "testRecursion2:" . PHP_EOL;
                // testRecursion1: echo "testRecursion1:" . PHP_EOL;
                    // testRecursion0: return;
                //
            //
        //
    //
//

// Рекурсивная функция - вызывает сама себя.
function factorial(int $n): int
{
    if ($n <= 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

//echo factorial(4);
//
// factorial(4): return 4 * factorial(3):
    // factorial(3): return 3 * factorial(2):
        // factorial(2): return 2 * factorial(1):
            // factorial(1): return 1;
        // factorial(2): return 2 * 1:
    // factorial(3): return 3 * 2 * 1
// factorial(4): return 4 * 3 * 2 * 1 => 24



// Функции переменных

$test = 10;
$variableName = 'test';

echo $$variableName;


function foo(): void
{
    echo "В foo()\n";
}

function bar($arg = ''): void
{
    echo "В bar(); аргумент был $arg\n";
}

// Функция-обёртка для echo
function echoit($string): void
{
    echo $string;
}

$func = 'foo';
$func();        // Вызывает функцию foo()

$func = 'bar';
$func('test');  // Вызывает функцию bar()

$func = 'echoit';
$func('test'); // Вызывает функцию echoit()


function testSum(int $a, int $b): int
{
    return $a + $b;
}

function testMul(int $a, int $b): int
{
    return $a * $b;
}

function testSub(int $a, int $b): int
{
    return $a - $b;
}

$functions = [
    'testSum',
    'testMul',
    'testSub',
];

$a = 10;
$b = 15;

echo PHP_EOL;
foreach ($functions as $function) {
    echo $function($a, $b) . PHP_EOL;
}

//echo is_callable($functions[0]); // Проверка можно ли вызвать функцию

$functions[] = 'blob';

foreach ($functions as $function) {
    if (is_callable($function)) {
        echo $function($a, $b) . PHP_EOL;
    }
}


// Closure, анонимные функции

$anonymFunc = function (string $name) {
    echo "Hi $name" . PHP_EOL;
};

//$anonymFunc('PHP');
//$anonymFunc('WORLD');


$globalMessage = 'BLob';
$anonymFuncWIthParam = function (string $name) use ($globalMessage) {
    echo "Hi $name, $globalMessage" . PHP_EOL;
};

$anonymFuncWIthParam('PHP');



// Стрелочные функции
// fn (argument_list) => expr.

$fn1 = fn($x, $y) => $x + $y;

echo $fn1(2, 3);

$y = 2;

$fn2 = fn($x) => $x + $y;

echo $fn2(4);


// Вызов на лету

echo (function (int $a, int $b) { return $a + $b; })(2, 4);
echo (fn(int $x, int $y) => $x + $y)(2, 4);