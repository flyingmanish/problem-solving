<?php 

$a = [1, 2, 3, 4, 5];
$b = [4, 5,6];

// $res1 = array_diff($a, $b);
// $res2 = array_diff($b, $a);

// $res = array_merge($res1, $res2);

// var_dump($res);

$arr = array_merge($a, $b);
$common_arr = array_intersect($a, $b);



 ?>