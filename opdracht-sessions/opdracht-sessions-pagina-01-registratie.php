<?php

    session_start();

    if ( isset( $_GET['session'] ) )
    {
    if ( $_GET['session']  == 'destroy' )
        {
            session_destroy( );
            header( 'location: opdracht-sessions-pagina-01-adres.php' );
        }
    }

    var_dump( $_SESSION );

    $email          =   ( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] : '';
    $nickname       =   ( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] : '';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>

    <h1>Deel 1: registratiegegevens</h1>

    <a href="opdracht-sessions-pagina-01-adres?session=destroy">Vernietig sessie</a>

    <form action="opdracht-sessions-pagina-02-adres.php" method="POST">

            <ul>
                <li>
                    <label for="email">email</label>
                    <input type="text" id="email" name="email" value="<?= $email ?>" placeholder="vul email in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "email" ) ? 'autofocus' : '' ?>>
                </li>
                <li>
                    <label for="nickname">nickname</label>
                    <input type="text" id="nickname" name="nickname" value="<?= $nickname ?>" placeholder="vul nickname in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "nickname" ) ? 'autofocus' : '' ?>>
                </li>
            </ul>

            <input type="submit" name="submit">
    </form>
                            
</body>
</html>