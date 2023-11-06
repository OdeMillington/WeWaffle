<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];


    $_SESSION['username'] = $username;
    echo $_SESSION['username'];


    session_unset();
    session_destroy();

    ?>



</body>
</html>