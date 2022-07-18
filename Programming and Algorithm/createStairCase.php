<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stair Case</title>
</head>
<body>
<?php


function createStairCase($height)
{
    

    for ($i = 1; $i <=$height ; $i++)
    {
      
        $stairs = 0;
        while ($stairs < $i)
        {
            echo "#";
            $stairs++;
        }
        echo "<br/>";
       
    }
}
createStairCase(9);

?>





    
</body>
</html>

