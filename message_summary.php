<?php
//start session
session_start();

?>

<?php
$conn = mysqli_connect("localhost", "root", "", "wewafflesystem");


if (!$_SESSION['loggedIn']) {
    $_SESSION['error'];
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="./Images/Favicon/favicon.ico">
    <title>WeWaffle | Messaging</title>
</head>
<body>



    <?php
    if (!isset($_SESSION['animation-played'])):
    ?>

    <div id="loader">
        <svg id="logo" width="687" height="121" viewBox="0 0 687 121" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M682.453 82.44H684.257L684.442 80.6458C684.737 77.8015 684.885 75.0924 684.885 72.52C684.885 65.0238 683.234 58.2551 679.888 52.2654C676.635 46.174 671.95 41.3929 665.871 37.948C659.773 34.4922 652.8 32.792 645.013 32.792C637.034 32.792 629.873 34.54 623.587 38.0876C617.383 41.5464 612.555 46.5366 609.119 53.0057C605.677 59.4848 603.989 66.9695 603.989 75.4C603.989 83.8405 605.729 91.3753 609.268 97.9482L609.268 97.9482L609.274 97.9596C612.804 104.414 617.67 109.44 623.858 112.991L623.87 112.998C630.15 116.543 637.214 118.296 645.013 118.296C654.765 118.296 663.078 115.852 669.821 110.846L669.829 110.84L669.837 110.834C676.518 105.773 680.997 99.2107 683.228 91.2005L683.934 88.664H681.301H667.189H665.767L665.3 90.007C663.903 94.0232 661.477 97.2312 657.982 99.6784C654.647 101.986 650.368 103.208 645.013 103.208C638.565 103.208 633.145 101.211 628.64 97.2421C624.729 93.6372 622.336 88.7574 621.57 82.44H682.453ZM664.326 58.0036L664.332 58.0138L664.338 58.0239C666.026 60.7391 667.027 63.9738 667.283 67.784H621.778C622.692 61.7617 625.062 57.1166 628.789 53.6972C633.105 49.8242 638.284 47.88 644.437 47.88C648.758 47.88 652.617 48.7779 656.052 50.5396L656.079 50.5535L656.107 50.5666C659.592 52.222 662.32 54.6894 664.326 58.0036Z" stroke="white" stroke-width="4"/>
            <path d="M590.551 8.44V6.44H588.551H575.447H573.447V8.44V115V117H575.447H588.551H590.551V115V8.44Z" stroke="white" stroke-width="4"/>
            <path d="M560.169 48.888H562.169V46.888V36.088V34.088H560.169H545.609V30.472C545.609 25.5056 546.725 22.4802 548.449 20.828L548.45 20.8268C550.285 19.0651 553.712 17.928 559.305 17.928H561.305V15.928V4.98401V2.98401H559.305C549.024 2.98401 541.085 5.07657 535.939 9.68552C530.839 14.2441 528.505 21.3373 528.505 30.472V34.088H520.281H518.281V36.088V46.888V48.888H520.281H528.505V115V117H530.505H543.609H545.609V115V48.888H560.169Z" stroke="white" stroke-width="4"/>
            <path d="M512.778 48.888H514.778V46.888V36.088V34.088H512.778H498.218V30.472C498.218 25.5056 499.334 22.4802 501.058 20.828L501.059 20.8268C502.894 19.0651 506.321 17.928 511.914 17.928H513.914V15.928V4.98401V2.98401H511.914C501.634 2.98401 493.694 5.07657 488.549 9.68552C483.448 14.2441 481.114 21.3373 481.114 30.472V34.088H472.89H470.89V36.088V46.888V48.888H472.89H481.114V115V117H483.114H496.218H498.218V115V48.888H512.778Z" stroke="white" stroke-width="4"/>
            <path d="M395.738 38.1044L395.732 38.1081L395.725 38.1119C389.729 41.6688 385.016 46.6977 381.59 53.1439C378.146 59.5292 376.458 66.9205 376.458 75.256C376.458 83.504 378.149 90.9332 381.581 97.495C385.003 104.036 389.711 109.163 395.704 112.819C401.7 116.478 408.4 118.296 415.754 118.296C422.868 118.296 429.18 116.74 434.619 113.558L434.629 113.553C438.015 111.546 440.903 109.209 443.274 106.537V115V117H445.274H458.522H460.522V115V36.088V34.088H458.522H445.274H443.274V36.088V44.2494C440.98 41.6845 438.184 39.4463 434.907 37.5296C429.464 34.3456 423.103 32.792 415.898 32.792C408.554 32.792 401.82 34.5568 395.738 38.1044ZM430.859 51.4866L430.883 51.5008L430.907 51.5144C434.683 53.6221 437.685 56.6976 439.916 60.803C442.13 64.8763 443.274 69.7201 443.274 75.4C443.274 81.0749 442.132 85.9719 439.912 90.1487C437.679 94.254 434.672 97.3826 430.883 99.5869C427.172 101.706 423.055 102.776 418.49 102.776C413.928 102.776 409.814 101.708 406.105 99.5922C402.414 97.3911 399.449 94.2626 397.211 90.1488C394.994 85.9764 393.85 81.0328 393.85 75.256C393.85 69.5761 394.993 64.7323 397.207 60.659C399.445 56.5416 402.407 53.465 406.09 51.3605C409.803 49.2386 413.922 48.168 418.49 48.168C423.042 48.168 427.15 49.279 430.859 51.4866Z" stroke="white" stroke-width="4"/>
            <path d="M370.934 15.1887L371.675 12.632H369.013H354.901H353.354L352.965 14.1292L332.826 91.6595L311.759 14.1077L311.358 12.632H309.829H295.141H293.631L293.217 14.0851L271.046 92.0819L250.998 14.1338L250.612 12.632H249.061H235.093H232.458L233.167 15.1701L261.247 115.682L261.66 117.159L263.193 117.144L277.737 117L279.21 116.985L279.633 115.574L301.874 41.3041L323.316 115.555L323.733 117H325.237H339.925H341.428L341.846 115.557L370.934 15.1887Z" stroke="white" stroke-width="4"/>
            <path d="M225.14 82.44H226.944L227.13 80.6458C227.424 77.8015 227.572 75.0924 227.572 72.52C227.572 65.0238 225.922 58.2551 222.576 52.2654C219.323 46.174 214.638 41.3929 208.558 37.948C202.46 34.4922 195.488 32.792 187.7 32.792C179.721 32.792 172.561 34.54 166.274 38.0876C160.071 41.5464 155.243 46.5366 151.806 53.0057C148.364 59.4848 146.676 66.9695 146.676 75.4C146.676 83.8405 148.416 91.3753 151.955 97.9482L151.955 97.9482L151.962 97.9596C155.492 104.414 160.357 109.44 166.545 112.991L166.557 112.998C172.837 116.543 179.902 118.296 187.7 118.296C197.453 118.296 205.765 115.852 212.509 110.846L212.516 110.84L212.524 110.834C219.205 105.773 223.684 99.2107 225.915 91.2005L226.621 88.664H223.988H209.876H208.455L207.987 90.007C206.59 94.0232 204.164 97.2312 200.67 99.6784C197.335 101.986 193.055 103.208 187.7 103.208C181.252 103.208 175.832 101.211 171.327 97.2421C167.416 93.6372 165.024 88.7574 164.257 82.44H225.14ZM207.013 58.0036L207.02 58.0138L207.026 58.0239C208.714 60.7391 209.715 63.9738 209.971 67.784H164.466C165.379 61.7617 167.75 57.1166 171.476 53.6972C175.793 49.8242 180.972 47.88 187.124 47.88C191.446 47.88 195.304 48.7779 198.74 50.5396L198.767 50.5535L198.794 50.5666C202.28 52.222 205.007 54.6894 207.013 58.0036Z" stroke="white" stroke-width="4"/>
            <path d="M141.153 15.1887L141.894 12.632H139.232H125.12H123.573L123.184 14.1292L103.045 91.6595L81.9781 14.1077L81.5772 12.632H80.048H65.36H63.8493L63.4362 14.0851L41.2645 92.0819L21.217 14.1338L20.8307 12.632H19.28H5.31201H2.67669L3.38577 15.1701L31.4658 115.682L31.8784 117.159L33.4118 117.144L47.9558 117L49.4292 116.985L49.8519 115.574L72.0931 41.3041L93.5345 115.555L93.9518 117H95.456H110.144H111.647L112.065 115.557L141.153 15.1887Z" stroke="white" stroke-width="4"/>
        </svg>

    </div> 

    <script>
        //finding the size of the svg letters 
        const logo = document.querySelectorAll("#logo path");

        for(let i = 0; i < logo.length; i++){
            console.log(`Letter ${i} is ${logo[i].getTotalLength()}`);
        
        }

        //removes page loader animation div after a set amount of miliseconds
        const loader = document.getElementById("loader");

        loader.addEventListener("animationend", ()=> {
            setTimeout(()=>{
            loader.remove();},1500);
        });
    
    </script>

    <?php
        $_SESSION['animation-played'] = '.';    
    endif;
    ?>


    <div class="message-container">


        <div class="menu">
            
            

            <div class=menuCompanyName>
                <p>WeWaffle</p>
            </div>

            <div class="userInfo">
                <div class="userProfile">
                    <div class="ProfileBox">   
                        <?php echo strtoupper(substr($_SESSION['username'],0,2))  ?>  
                    </div>

                    <div class="username">
                        <p id="displayName"><?php echo $_SESSION['username'] ?></p>
                        <p id="displayRole"> <?php echo $_SESSION['userRole'] ?> </p>
                    </div>
                </div>
            </div>

            <div class="menuOptions">


                <div class="topMenu">
                    <p id="inbox"><a href="message.php">Inbox</a></p>
                    <p id="createMsg"><a href="create_message.php">Create Message</a></p>
                    <p id="msgSummary"><a href="message_summary.php"> <span class ="active-page">Message Summary</span> </a></p>
                    
                    <?php
                    if ($_SESSION['userRole'] == "Admin") {
                        echo '<p id="searchMsg"><a href="search_message.php">Search Messages</a></p>';
                        echo '<p id="delNotice"><a href="delete_notice.php">Delete Notice</a></p>';
                    }

                    ?>
                </div>

                <div class="bottomMenu">
                    <p id="about"><a href="about.php">About</a></p>
                    <p id="logout"><a href="logout.php">Log Out</a></p>
                </div>
                
            </div>
        </div>

        <div class="main-area summary">

            <div class="box messagesReceived">
                
                <p id="summaryText">Messages Received</p>

                <?php 
                    $username = $_SESSION['username'];

                    if ($_SESSION['userRole'] == 'Admin') {
                        $result = mysqli_query($conn, "SELECT * FROM `message` WHERE `receiver` = '$username' OR `receiver` = 'everyone' AND `sender` != '$username'");
                    } else {
                        $result = mysqli_query($conn, "SELECT * FROM `message` WHERE `receiver` = '$username' OR `receiver` = 'everyone'");
                    }
                    $noReceived = strval(mysqli_num_rows($result));

                    echo "<p id='receiverCount'>$noReceived</p>";
                ?>
            </div>

            <div class="box unreadMessages">
                
                <div>
                    <p id="summaryText">Unread Messages</p>
                </div>


                <div>
                    <?php 
                        $username = $_SESSION['username'];
                        $result = mysqli_query($conn, "SELECT * FROM `message` WHERE `receiver` = '$username' AND `status` = 'unread'");

                        $noUnread = strval(mysqli_num_rows($result));

                        echo "<p id='unreadCount'>$noUnread</p>";
                    ?>
                </div>                
            </div>

            <div class="box messagesSent">

            <div>
                <p id="summaryText">Messages Sent</p>
            </div>


            <div>
                <?php 
                        $username = $_SESSION['username'];
                        $result = mysqli_query($conn, "SELECT * FROM `message` WHERE `sender` = '$username'");

                        $noSent = strval(mysqli_num_rows($result));

                        echo "<p id='sentCount'>$noSent</p>";
                ?>  
            </div>                 
            </div>
        </div>

    </div>

</body>
</html>

