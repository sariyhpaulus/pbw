<?php
    session_start();
    // not necessary but convenient 
    if (isset($_REQUEST['address']))
        $_SESSION['address'] = $_REQUEST['address'];

    if(!isset($_SESSION['start'])){
        $_SESSION['start'] = time();
    }

    //Check the session is expired or not
    if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 5)) {
        //Unset the session variables
        session_unset();
        //Destroy the session
        session_destroy();
        header("Location: form1Session.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang='en-GB'>

<head>
    <title>Processing</title>
</head>

<body>
    <?php
    echo $_SESSION['item'];
    echo $_SESSION['address'];
    // Once we do not need the data anymore , get rid of it 
    // session_unset();
    // session_destroy();
    ?>
</body>

</html>