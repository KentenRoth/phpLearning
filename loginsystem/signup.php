<?php 
    include_once 'header.php'
?>


    <h2>Sign Up</h2>
    <form action='includes/signup.inc.php' method='POST'>
        <input type='text' name='name' placeholder="Full Name"/>
        <br>
        <input type='text' name='email' placeholder="Email" />
        <br>
        <input type='text' name='uid' placeholder="User Name"/>
        <br>
        <input type='password' name='pwd' placeholder="Password" />
        <br>
        <input type='password' name='pwdrepeat' placeholder="Re-Enter Password" />
        <br>
        <button name='submit' type='submit'>Sign Up</button>
        </form>

<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'emptyinput') {
            echo "<p>Fill in all fields</p>";
        } elseif ($_GET['error'] =='invaliduid') {
            echo "<p>Invalid Username</p>";
        } elseif ($_GET['error'] == 'invalidemail') {
            echo "<p>Invalid Email</p>";
        } elseif ($_GET['error'] == 'passwordsdontmatch') {
            echo "<p>Passwords do not match</p>";
        } elseif ($_GET['error'] == 'usernameTaken') {
            echo "<p>Username Taken</p>";
        } elseif ($_GET['error'] == 'stmtfailed') {
            echo "<p>Something went wrong</p>";
        } elseif ($_GET['error'] == 'none') {
            echo "<p>You have been signed up!</p>";
        }
    }
?>

<?php 
    include_once 'footer.php'
?>