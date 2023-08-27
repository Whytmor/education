<?php
$hello = function($name)
{
    echo "<h2>Hello {$name}</h2>";
};

$hello('Tom');
$hello('Bob');

$sum = function($a, $b)
{
    return $a + $b;
};
$number = $sum(5, 11); // 16
echo $number;

function welcome($message)
{
    $message();
}

welcome(function() 
{
    echo 'Hello!';
});

function welcome1($message)
{
    $message();
}
$goodMorning = function() 
{
    echo "<h3>Доброе утро</h3>";
};

$goodEvening = function() 
{
     echo "<h3>Добрый вечер</h3>"; 
};

welcome1($goodMorning); //Доброе утро
welcome1($goodEvening); // Добрый вечер
welcome (function() 
{
    echo "<h3>Привет</h3>"; // Привет
});

function sum($numbers)
{
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number;
    }
    return $result;
}

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$numbersSum = sum($myNumbers);
echo $numbersSum; //12

function sum1($numbers, $condition) 
{
    $result = 0;
    foreach ($numbers as $number) {
        if ($condition($number)) {
            $result += $number;
        }
    }
    return $result;
}

// Для четных чисел
$isEvenNumber = function($n) 
{
    return $n % 2 === 0;
};
// для положительных чисел
$isPositiveNumber = function($n) 
{
    return $n > 0;
};

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$positiveSum = sum1($myNumbers, $isPositiveNumber);
$evenSum = sum1($myNumbers, $isEvenNumber);
echo "Сумма положительных чисел: {$positiveSum} <br /> Сумма четных чисел: {$evenSum}";


