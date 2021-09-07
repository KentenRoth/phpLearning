<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$articleID = $_GET['id'];
$articleName = $_GET['name'];

echo 'Article ID is: ' . $articleID;
echo '<br/>';
echo 'Article name is: ' . $articleName;
?>

<a href='profile.php'>Profile Page</a>

</body>
</html>