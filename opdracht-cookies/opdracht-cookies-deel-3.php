<?php 
    
    var_dump( $_POST );

    if ( isset( $_GET[ 'logout' ] ) )
    {

        setcookie( 'authenticatedUserId', '', time() - 1000 );
        header('location: opdracht-cookies-deel-2.php');
    }

    $fileContent    =   file_get_contents( 'txt.txt' );
    $userData       =   explode( ',', $fileContent );


    $message            =   false;
    $isAuthenticated    =   false;
    
    if ( isset( $_POST[ 'submit' ] ) )
    {

        foreach ( $userData as $id => $user )
        {
            if ( $_POST[ 'username' ] == $userData[ 0 ] &&
                    $_POST[ 'password' ] == $userData[ 1 ] )
            {

                $cookieTime =   ( isset( $_POST[ 'rememberMe' ] ) ? ( time() + 60*60*24*30 ) : time() + 3600 );

                setcookie( 'authenticatedUserId', $id, $cookieTime );
                header( 'location: opdracht-cookies-deel-2.php' );
                break;
            }
        }

        $message = 'Er ging iets mis. Probeer opnieuw.';        
    }

    if ( isset( $_COOKIE[ 'authenticatedUserId' ] ) )
    {
        $userId             =   $_COOKIE[ 'authenticatedUserId' ];
        $message            =   'Hallo, ' . $userData[ 0 ] . ', fijn dat je er weer bij bent! ';
        $isAuthenticated    =   true;
    }

?>

<!DOCTYPE html>
<html>
<head></head>
    <body>
    

        <h1>Inloggen</h1>
        
        <?php if ($message): ?>
            <?= $message ?>
        <?php endif ?>

        <?php if ( !$isAuthenticated ): ?>
        
            <form action="opdracht-cookies-deel-2.php" method="post">
                <ul>
                    <li>
                        <label for="username">Gebruikersnaam: </label>
                        <input type="text" name="username" id="username" value="jan">
                    </li>
                    <li>
                        <label for="password">Paswoord: </label>
                        <input type="password" name="password" id="password" value="paswoord01">
                    </li>
                    <li>
                        <label for="rememberMe">Mij onthouden: </label>
                        <input type="checkbox" name="rememberMe" id="rememberMe">
                    </li>
                </ul>
                <input type="submit" name="submit" value="inloggen">
            </form>
        <?php else: ?>

            <a href="opdracht-cookies-deel-2.php?logout=true">Uitloggen</a>

        <?php endif ?>
        


    </body>
</html>