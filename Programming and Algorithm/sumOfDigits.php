<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Digits</title>
</head>
<body>
<?php

function sumOfDigits($n)
{
    if ($n == 0){
        return 0;


    }else{
        return ($n % 10 +
        sumOfDigits($n / 10));
    }
   
}
 


$result = sumOfDigits(123441245);
echo("The answer is " . $result);
?>





    
</body>
</html>

