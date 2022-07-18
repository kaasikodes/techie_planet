<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Duplicates</title>
</head>
<body>
<?php


// for a single array
function removeDups($arr){
    $i = 0;
    $existing = array();
    while ($i < count($arr)) {
        $existing[$arr[$i]] = false;
        $i++;
        
        
    }
    // reset i
    $i = 0;
    while ($i < count($arr)) {
        if($existing[$arr[$i]]){
            $arr[$i] = 0;

        }else{
            $existing[$arr[$i]] = true;

        }
        $i++;
        
        
    }
    return $arr;


}

// for a multidimensional array
function removeArrayDuplicates($multiArr)
{
    // get the length of each the parent array
    // get the length of the child of each array
    // for each array loop through it, while keeping a record of the elements encountered in the array
    // if the element already exists put a zero
    $i = 0;
    
    while ($i < count($multiArr)) {
        $multiArr[$i] = removeDups($multiArr[$i]);
        $i++;
        
        
    }
    return $multiArr;

    
    
}

$dupArr = array(array(1,2,4,4,4,4,4,4,4,45,66), array(1,2,4,4,4,4,4,4,4,45,66), array(1,2,4,4,4,4,4,4,4,45,66));
$result = removeArrayDuplicates($dupArr);
print_r($result);



?>





    
</body>
</html>

