<?php
// ЗАДАНИЕ 1
$day = 3; // произвольное целочисленное значение

$result = match (true) {
    $day >= 1 && $day <= 5 => 'Это рабочий день',
    $day == 6 || $day == 7 => 'Это выходной день',
    default => 'Неизвестный день',
};

file_put_contents('match.php', '<?php' . "\n" . '$day = ' . $day . ';' . "\n" . 'echo "' . $result . '";');
?>