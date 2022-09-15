<?php


//Напишите функцию divisible_by_three(int $max, int $min): array, которая формирует убывающий массив от $max и до $min из чисел,
//которые делятся на 3 без отстатка. В тестах проверьте что первый, последний и любой некрайний элемент списка действительно делятся на 3.
//Например для three_devided_range(1002, 0) вернет массив [1002, 999, ... 0]

function divisible_by_three(int $max, int $min): array
{
    $array = range($min, $max);

    return [
        array_filter($array, function ($arr) {
            return (intval($arr % 3 == 0));
        })
    ];
}

$min = 1;
$max = 1000;

assert(divisible_by_three($min, $max));

////////////////////TESTS///////////////////////////////

$allElements = divisible_by_three($min, $max);

function three_devided_range ($allElements)
{
    foreach ($allElements as $lastElement)
    {
        return reset($lastElement);
    }
}

assert(three_devided_range($allElements) % 3 ==0);

//assert($lastElement % 3 === 0);
//array_rand