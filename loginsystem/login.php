<?php 
    include_once 'header.php'
?>

    <h2>Login</h2>

    <form action='includes/login.inc.php' method='POST'>
        <input type='text' name='uid' placeholder="User Name/Email"/>
        <br>
        <input type='password' name='pwd' placeholder="Password" />
        <br>
        <button type='submit' name='submit'>Login</button>
    </form>

<?php 
    if (isset($_GET['error'])) {
        if (isset($_GET['error']) == 'wronglogin') {
            echo "<p>login failed </p>";
        } elseif (isset($_GET['error']) == 'wrongpassword') {
            echo "<p>login failed </p>";
        } elseif (isset($_GET['error']) == 'emptyinput') {
            echo "<p>Fill everything out</p>";
        }
    }
?>


<?php 
    include_once 'footer.php'
?>