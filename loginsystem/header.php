<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='css/style.css' />
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='discover.php'>Discover</a></li>
            <li><a href='blog.php'>Blog</a></li>
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<li><a href='profile.php'>Profile</a></li>";
                echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
            } else {
                echo "<li><a href='signup.php'>Sign up</a></li>";
                echo "<li><a href='login.php'>Login</a></li>";
            } 
        ?>
        
            
        </ul>
    </nav>