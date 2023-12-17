<?php 

session_start();

?>
<?php
    $conn = mysqli_connect("localhost", "root", "", "wewafflesystem");


    if (!$_SESSION['loggedIn']) {
        $_SESSION['error'];
        header("Location:../index.php");
    }

    $username = $_SESSION['username'];
?>

<?php

    $noticetitle = $_POST['noticetitle'];  

    $resultnotice = mysqli_query($conn,"SELECT * FROM message WHERE receiver = 'everyone' AND messageTitle='$noticetitle'");

    if (mysqli_num_rows($resultnotice) != 1) {
        
        $_SESSION['error2'] = ".";
        header("Location:../delete_notice.php");
        
    } else {

        mysqli_query($conn,"DELETE FROM message WHERE messageTitle ='$noticetitle' AND receiver ='everyone'");

        $_SESSION['success'] =".";
        header("Location:../delete_notice.php");
    }
    


?>



