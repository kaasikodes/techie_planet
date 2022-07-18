<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time in words</title>
</head>
<body>
<?php

function printTimeInWords($h, $m)
{
    $nums = array("zero", "one", "two", "three", "four",
                  "five", "six", "seven", "eight", "nine",
                  "ten", "eleven", "twelve", "thirteen",
                  "fourteen", "fifteen", "sixteen", "seventeen",
                  "eighteen", "nineteen", "twenty", "twenty one",
                  "twenty two", "twenty three", "twenty four",
                  "twenty five", "twenty six", "twenty seven",
                  "twenty eight", "twenty nine");
    // validate the input
    if(!($h >= 1 && $h<=12) || !($m >= 0 && $m<=60)){
        echo 'Invalid input';
        return;
    }
 
    if ($m == 0)
        echo $nums[$h],
             "o' clock\n" ;
 
    else if ($m == 1)
        echo "one minute past ",
                $nums[$h], "\n";
 
    else if ($m == 59)
        echo "one minute to ",
             $nums[($h % 12) + 1], "\n";
 
    else if ($m == 15)
        echo "quarter past ",
             $nums[$h], "\n";
 
    else if ($m == 30)
        echo "half past ",
           $nums[$h],"\n";
 
    else if ($m == 45)
        echo "quarter to ",
             ($nums[($h % 12) + 1]), "\n";
 
    else if ($m <= 30)
        echo $nums[$m],
             " minutes past ",
               $nums[$h],"\n";
 
    else if ($m > 30)
        echo $nums[60 - $m],
             " minutes to ",
             $nums[($h % 12) + 1], "\n";
}

$h = 10;
$m = 28 ;
 
printTimeInWords($h, $m);

?>





    
</body>
</html>

