<?php


// 
$input = "199,911
119,991
24,13";

$output = '';

//split pairs by new line
$array = explode("\n", $input);

// working with pairs one by one
for ($i=0; $i < count($array); $i++) { 
  // split the pair separated by comma
  $numbers = explode(',', $array[$i]);

  // reverse these number
   $input_one_rev = strrev($numbers[0]);
   $input_two_rev = strrev($numbers[1]);

   // sum of these reversed numbers
   $bigsum = (int)$input_one_rev + (int)$input_two_rev;

  // reverse this sum
  $sum_rev = strrev($bigsum);

  // convert numbers into an array
  $split_sum = str_split($sum_rev);

  // check sum leading 0, if have then remove
  for ($j=0; $j < count($split_sum); $j++) { 
    if($split_sum[$j] == 0){
      unset($split_sum[$j]);
    }else{
      // if leading 0 not exists then stop looping
      break; 
    }
  }

  // add sum to the result, array to string
  $output .= implode('', $split_sum)."<br>";
}

echo $output;