<?php
$getal1 = 0;

## 

$getal = 0;

$getallen = array();

while ($getal < 80)
         {
            if($getal % 3 == 0 && $getal > 40)
            {
                $getallen[] = $getal;
            }
            ++$getal;
         }

$output = implode(', ', $getallen);

?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Naamloos document</title>
    </head>

    <body>
    
    <p>
        <?php  
      
        while ($getal1 <= 100)  
        {  
        echo $getal1 . ' , ';
        ++$getal1;
        }  
        ?>  
    </p>

    <p>
        <?= $output ?> 
    </p>

    </body>
    
</html>