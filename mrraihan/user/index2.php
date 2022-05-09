<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard(TMS)</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="shortcut icon" href="../images/team.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">



</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2><i class="fas fa-home"></i>&nbsp;Dashboard</h2>
            <ul>
                <li><a href="../user/index2.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="#"><i class="fas fa-address-card"></i>PayBill</a></li>
                <li><a href="#"><i class="fas fa-project-diagram"></i>Area Info</a></li>
                
                <li><a href="../contact.php"><i class="fas fa-address-book"></i>Complaint</a></li>
                <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            <div class="social_media">
                <a href="../team.php"><i class="fab fa-facebook-f"></i></a>
                <a href="../team.php"><i class="fab fa-twitter"></i></a>
                <a href="../team.php"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header"><b>WELCOME !! <?php echo ($_SESSION['email']); ?> </b></div>


        </div>

    </div>
    <div class="image">
        <img class="p" src="../images/hello.gif" alt="TMS">
    </div>



       


</body>

</html>