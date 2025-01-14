<?php
declare(strict_types=1);

// Чистая функция
function test(string $name): string
{
    $result = "Bye, $name"; // Рефакторинг

    if ($name == 'Sultan')
    {
        $result = "Hello, $name";
    }

    if ($name == 'Gio')
    {
        $result = "Hi, $name";
    }

    return $result;
}

var_dump(test('Sultan'));
var_dump(test('Gio'));
var_dump(test('John'));

