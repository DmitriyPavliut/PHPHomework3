<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//Задание 1
echo "Задание 1</br>";

function calcCubeNumber($variable)
{
    return pow($variable, 3);
}

echo calcCubeNumber(3);


//Задание 2
echo "</br></br>Задание 2</br>";

function calcSumNumber($variable1, $variable2)
{
    return $variable1 + $variable2;
}

echo calcSumNumber(4, 5);


//Задание 3
echo "</br></br>Задание 3</br>";

function getDayWeekDay($day)
{
    $nameWeek = [
        '1' => 'Понедельник',
        '2' => 'Вторник',
        '3' => 'Среда',
        '4' => 'Четверг',
        '5' => 'Пятница',
        '6' => 'Суббота',
        '7' => 'Воскресенье'
    ];

    return ($day > 0 && $day < 8 && is_int($day)) ? $nameWeek[$day] : "Error";
}

echo getDayWeekDay(5);


//Задание 4
echo "</br></br>Задание 4</br>";

function checkNegativeNumber($variable)
{
    return ($variable < 0);
}

echo checkNegativeNumber(-4) ? "true" : "false";


//Задание 5
echo "</br></br>Задание 5</br>";

function getDigitsSum($digit)
{
    $num = strval($digit);
    $sum = 0;

    for ($i = 0; $i < strlen($num); $i++) {
        $sum += +$num[$i];
    }
    return $sum;
}

echo getDigitsSum(34343423312341);


//Задание 6
echo "</br></br>Задание 6</br>";

function findYear($startYear, $endYear, $findSum)
{
    $arYear = array();
    for ($i = $startYear; $i <= $endYear; $i++) {
        if (getDigitsSum($i) == $findSum) {
            array_push($arYear, $i);
        }
    }
    return $arYear;
}

foreach (findYear(1, 2020, 13) as $value) {
    echo "$value, ";
}


//Задание 7
echo "</br></br>Задание 7</br>";

function isEven($number)
{
    return ($number % 2 == 0);
}

echo isEven(44) ? "true" : "false";


//Задание 8
echo "</br></br>Задание 8</br>";

function translitString($string)
{
    $arRusLetters = [
        'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й',
        'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
        'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
        'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й',
        'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
        'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
    ];

    $arTranslitLetters = [
        'A', 'B', 'V', 'G', 'D', 'E', 'IO', 'ZH', 'Z', 'I', 'I',
        'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
        'H', 'C', 'CH', 'SH', 'SH', '`', 'Y', '`', 'E', 'IU', 'IA',
        'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'i',
        'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
        'h', 'c', 'ch', 'sh', 'sh', '`', 'y', '`', 'e', 'iu', 'ia'
    ];

    return str_replace($arRusLetters, $arTranslitLetters, $string);
}

echo translitString("Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий.");


//Задание 9
echo "</br></br>Задание 9</br>";

function returnName($quantity, $nameOne, $nameFew, $nameMany)
{
    $quantity = strval($quantity);
    $endNumber = $quantity[strlen($quantity) - 1];
    if ($endNumber == 1) return "$quantity $nameOne";
    elseif ($endNumber > 1 && $endNumber < 5) return "$quantity $nameFew";
    elseif ($endNumber >= 5) return "$quantity $nameMany";
    else return "Error";
}

echo returnName(55, 'яблоко', 'яблока', 'яблок');


//Задание 10
echo "</br></br>Задание 10</br>";

$arNumbers = [1, 3234, 4, 25, 1, 2, 123, 4, 52, 1, 2, 344, 5, 3, 2, 43, 2, 3, 47];

function outputArray($array)
{
    if (count($array) <= 1) {
        echo array_shift($array);
        echo " ";
    } else {
        echo array_shift($array);
        echo " ";
        outputArray($array);
    }
}

outputArray($arNumbers);


//Задание 11
echo "</br></br>Задание 11</br>";

function calculateSumDigits($number)
{
    $sum = getDigitsSum($number);
    if ($sum < 10) return $sum;
    else return calculateSumDigits($sum);

}

echo calculateSumDigits(3496);


//Задание 12
echo "</br></br>Задание 12</br>";

function calcSpeedCar($distance, $time, $type)
{
    $speed[1] = $distance / $time . "км/ч";
    $speed[2] = $distance / $time * 1000 / 3600 . "м/с";

    return $speed[$type];
}

echo calcSpeedCar(50, 5, 1);
echo "</br>";
echo calcSpeedCar(50, 5, 2);


//Задание 13
echo "</br></br>Задание 13</br>";

function checkWords($word1, $word2)
{

    $word1 = preg_split('//u', $word1);
    $word2 = preg_split('//u', $word2);

    $result = array_diff($word1, $word2);

    echo (count($result) < 1)
        ? "Можно составить из первого слова  второе"
        : "Нельзя составить из первого слова второе";
}

echo "даны строки: afasdfasdf и aqwasdqwe</br>";
checkWords('afasdfasdf', 'aqwasdqwe');


//Задание 14
echo "</br></br>Задание 14</br>";

function checkPalindrom($word)
{
    $word = str_replace(" ", "", $word);
    $word = mb_strtolower($word);
    $word = preg_split('//u', $word);
    $wordRev = array_reverse($word);

    echo ($word == $wordRev)
        ? "это палиндром"
        : "это не палиндром";
}

echo "Строка: Ежу хуже</br>";
checkPalindrom('ежу хуже');

echo "</br>Строка: Ужу хуже</br>";
checkPalindrom('Ужу хуже');


//Задание 15
echo "</br></br>Задание 15</br>";

function multiplicationTable()
{
    echo "<table border=\"1\" width=\"100%\" cellpadding=\"5\"><tr>";
    for ($i = 2; $i <= 10; $i++) {
        for ($v = 1; $v <= 10; $v++) {
            echo "<td>$i*$v=";
            echo($i * $v);
            echo "</td>";
        }
        echo "</tr><tr>";
    }
    echo "</table>";
}

multiplicationTable();


//Задание 16
echo "</br></br>Задание 16</br>";

function checkLengthString($string)
{
    $maxWord = '';
    $string = explode(' ', $string);

    foreach ($string as $value) {
        if (strlen($maxWord) < strlen($value)) {
            $maxWord = $value;
        }
    }

    return $maxWord;
}

echo "Строка: жили у бабуси два веселых гуся</br>";
echo checkLengthString("жили у бабуси два веселых гуся");


//Задание 17
echo "</br></br>Задание 17</br>";

function calcDigitInNumber($startNumber, $endNumber, $searchDigit)
{
    $i = $startNumber;
    $count = 0;

    for (; $i <= $endNumber; $i++) {
        if (strripos("$i", "$searchDigit") !== false)
            $count++;
    }

    return $count;
}

echo "Количество 1 в диапазоне от 1 до 100</br>";
echo calcDigitInNumber(1, 100, 1);


//Задание 18
echo "</br></br>Задание 18</br>";

function breakString1($string, $length)
{
    $newString = wordwrap($string, $length, "</br>");
    return $newString;
}

echo breakString1('Sale liber et vel. Eu eam dolores lobortis percipitur, quo te equidem deleniti disputando.Sale liber et vel. Eu eam dolores lobortis percipitur, quo te equidem deleniti disputando.', 40);
echo "</br></br>";

function breakString2($string, $length)
{
    $newString = '';
    $arString = preg_split('//u', $string);

    while (count($arString)) {
        for ($i = 0; $i < $length; $i++) {
            if ($i + 1 == $length && isset($arString[1]) && $arString[0] !== " ") {
                $newString .= "-";
            } else {
                $newString .= array_shift($arString);
            }
        }

        $newString .= "</br>";

    }

    return $newString;
}

echo breakString2('Sale liber et vel. Eu eam dolores lobortis percipitur, quo te equidem deleniti disputando.Sale liber et vel. Eu eam dolores lobortis percipitur, quo te equidem deleniti disputando.', 50);

?>
</body>
</html>


