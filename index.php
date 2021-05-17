<?php
$arr = [
    [1, 3, 5],
    [3, 2, 4],
    [5, 1, 4],
];
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr); $j++) {
        $sum += $arr[$i][$j];
    }
}
echo $sum;