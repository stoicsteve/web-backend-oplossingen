<?php

$boodschappenlijst = ['melk', 'boter', 'eieren', 'sla']

?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Naamloos document</title>
    </head>

    <body>
    
    <ul>
            <?php 
                $boodschappen       =   0;
            ?>
            
            <?php while( isset( $boodschappenlijst [ $boodschappen ] ) ):  ?>
            
                    <li><?= $boodschappenlijst [ $boodschappen ] ?></li>

                <?php $boodschappen++ ?>
                    
            <?php endwhile ?>
    </ul>


    </body>
    
</html>