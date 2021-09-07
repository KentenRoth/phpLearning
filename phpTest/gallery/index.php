<?php
$_SESSION['username'] = 'Admin';
include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Gallary</h2>

    <div>
<?php
$sql = 'SELECT * FROM gallery ORDER BY orderGallery DESC';
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
	echo 'SQL Failed';
} else {
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<a href='#'>
            <div>
                <img src='uploads/" .
			$row['imgFullNameGallery'] .
			"' />
            </div>
            <h3>" .
			$row['titleGallery'] .
			"</h3>
            <p>" .
			$row['descGallery'] .
			"</p>
        </a>";
	}
}
?>
        </div>

<?php if (isset($_SESSION['username'])) {
	echo '<div>
        <h3>Upload Image</h3>
        <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
        <br>
            <input type="text" name="filename" placeholder="File Name" />
        <br>
            <input type="text" name="filetitle" placeholder="Image Title" />
        <br>
            <input type="text" name="filedesc" placeholder="Image Description"/>
        <br>
            <input type="file" name="file" />
        <br>
            <button type="submit" name="submit">Upload Image</button>
        </form>
    </div>';
} ?>

    
</body>
</html>