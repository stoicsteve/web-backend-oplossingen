<?php 
    
    if ( isset( $_GET[ 'logout' ] ) )
    {

        setcookie( 'authenticated', '', time() - 1000 );
        header('location: opdracht-cookies-deel-1.php');
    }

    $file    =   file_get_contents( 'txt.txt' );
    $user       =   explode( ',', $file );

    $message            =   false;
    $authenticated    =   false;

    if ( !isset( $_COOKIE['authenticated'] ) )
    {
        if ( isset( $_POST[ 'submit' ] ) )
        {
            if ( $_POST[ 'username' ] == $user[ 0 ] &&
                    $_POST[ 'password' ] == $user[ 1 ] )
            {
                setcookie( 'authenticated', true, time() + 3600 );
                header( 'location: opdracht-cookies-deel-1.php' );
            }
            else
            {
                $message = 'Er ging iets mis. Probeer opnieuw.';
            }
        }
    }
    else
    {
        $message            =   'U bent ingelogd.';
        $authenticated    =   true;
    }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>

        <h1>Inloggen</h1>
        
        <?php if ($message): ?>
            <?= $message ?>
        <?php endif ?>

        <?php if ( !$authenticated ): ?>
        
            <form action="opdracht-cookies-deel-1.php" method="post">
                <ul>
                    <li>
                        <label for="username">Gebruikersnaam: </label>
                        <input type="text" name="username" id="username">
                    </li>
                    <li>
                        <label for="password">Paswoord: </label>
                        <input type="password" name="password" id="password">
                    </li>
                </ul>
                <input type="submit" name="submit" value="inloggen">
            </form>
        <?php else: ?>

            <a href="opdracht-cookies-deel-1.php?logout=true">Uitloggen</a>

        <?php endif ?>

                
</body>
</html>