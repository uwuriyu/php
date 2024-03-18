<?php
// Запрашиваем номер дня недели у пользователя
$dayNumber = readline("Введите номер дня недели (1 - понедельник, 2 - вторник и так далее): ");

// Определяем название дня недели
switch ($dayNumber) {
    case 1:
        $dayName = "понедельник";
        break;
    case 2:
        $dayName = "вторник";
        break;
    case 3:
        $dayName = "среда";
        break;
    case 4:
        $dayName = "четверг";
        break;
    case 5:
        $dayName = "пятница";
        break;
    case 6:
        $dayName = "суббота";
        break;
    case 7:
        $dayName = "воскресенье";
        break;
    default:
        $dayName = "некорректный номер дня недели";
}

// Выводим название дня недели
echo "День недели: ".$dayName."\n";

