<?php 

session_start();

?>
<?php
    $conn = mysqli_connect("localhost", "root", "", "wewafflesystem");


    if (!$_SESSION['loggedIn']) {
        $_SESSION['error'];
        header("Location: index.php");
    }

    $username = $_SESSION['username'];
?>
<?php
    
        $title = $_POST['message-title'];  
        if($title == 'Read All'){

            $alltitles = mysqli_query($conn,"SELECT * FROM message WHERE receiver!='everyone' AND receiver='$username' AND status='unread'");

            if($alltitles->num_rows > 0){

                while($rowTitles = $alltitles->fetch_assoc()){
                    $everytitle = $rowTitles['messageTitle'];
                    mysqli_query($conn,"UPDATE message SET status='read' WHERE messageTitle ='$everytitle'");
                }
            }
        }else{
        $result = mysqli_query($conn,"UPDATE message SET status='read' WHERE messageTitle ='$title'");
        }
   
        header("Location: message.php");
?>


