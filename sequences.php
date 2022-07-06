<?php
$arr = [1,1,1,2,2,1,3,4];

function findBigSequence($arr) {
    $sequences = array(); // Все последовательности
    $subsequence = array(); // Подпоследовательность
    $result = array(); // Результат

    // Если в массиве одно число
    if (count($arr) === 1) {
        array_push($sequences, $arr[0]);
        // $sequences.push($arr[0]);
        return $sequences;
    }

    // Если 1-й элемент является частью последовательности, то добавляем его в $subsequence
    // Если цикл for будет начинаться с 0, тогда $arr[i - 1] будет undefined
    if ($arr[1] >= $arr[0]) {
        array_push($subsequence, $arr[0], $arr[1]);
    }

    for ($i = 2; $i < count($arr); $i++) {
        // Для чисел в начале подпоследовательностей
        if ($arr[$i - 1] < $arr[$i - 2] && $arr[$i - 1] <= $arr[$i]) {
            array_push($subsequence, $arr[$i - 1]);
        }

        // Для остальных чисел подпоследовательности
        if ($arr[$i] >= $arr[$i - 1]) {
            array_push($subsequence, $arr[$i]);
        }

        // Добавили подпоследовательность в $sequences и очистили $subsequence
        else {
            if (count($subsequence)) {
                array_push($sequences, $subsequence);
                $subsequence = [];
            }
        }
    }

    // Если подпоследовательность находится в конце исходного массива, то добавляем ее в $sequences
    if (count($subsequence)) {
        array_push($sequences, $subsequence);
    }

    // Находим самую длинную подпоследовательность
    $result = $sequences[0];
    for ($j = 1; $j < count($sequences); $j++) {
        if (count($result) < count($sequences[$j])) {
            $result = $sequences[$j];
        }
    }

    return $result;
}

$result_array = findBigSequence($arr);
foreach ($result_array as $item) {
    echo $item;
    echo ' ';
}
?>