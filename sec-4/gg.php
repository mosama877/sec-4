<?php
// $n = rand(1, 100);
// $array = [];
// for ($i = 0; $i < $n; $i++) {
//     $array[] = rand(1, 100);
// }
// // print_r($array);
// $average = array_sum($array) / $n;
// echo $average;






// $arr1 = [1,2,3,4,5,6,7,8,9,10];
// $arr2 = array_chunk($arr1, 5);
// print_r($arr2);






// $arr = [1, 10, 5, 2, 11];
// $large = max($arr);
// $small = min($arr);
// echo  $large . "<br>";
// echo  $small;







// $arr = [1, 10, 5, 2, 11];
// $x = 3;

// for($i=0; $i <= count($arr) ; $i++){
//     if ($i < $x) {
//         echo "Numbers Smaller than ($x) = " . $i . "<br>";
//     } 
//     else {
//         echo "Numbers Greater than ($x) = " . $i . "<br>";
//     }
// }










// function capital($names) {
//     return array_map('ucfirst', $names);
// }
// $input = ["eraasoft", "backend", "group313"];
// $out = capital($input);
// print_r($out);










// function move($nums) {
//     $num1 = 0;
//     $first = [];
//     foreach ($nums as $num) {
//         if ($num != 0) {
//             $first[] = $num;
//         } else {
//             $num1++;
//         }
//     }
//     while ($num1 > 0) {
//         $first[] = 0;
//         $num1--;
//     }
//     print_r($first);
// }

// $numbers = [0, 1, 0, 3, 12];
// move($numbers);











// function find_bob($names) {
//     $new = implode(" ", $names);
//     $find = str_contains($new , "Bob");
    
//     if ($find == 1){
//         return "1";
//     }
//     else{
//         return "-1";
//     }
// }

// $names1 = ["Alice", "Bob", "Charlie", "Dave"];
// $names2 = ["Alice", "Charlie", "Dave"];
// echo find_bob($names1) . "<br>";
// echo find_bob($names2);









// function second($num) {
//     rsort($num);
//     print_r ($num) ;
//     echo "<br>" . $num[1];
// }

// $numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// echo second($numbers);









