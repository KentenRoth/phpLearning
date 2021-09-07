<?php

include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
	$newFileName = $_POST['filename'];
	if (empty($newFileName)) {
		$newFileName = 'gallery';
	} else {
		$newFileName = strtolower(str_replace(' ', '-', $newFileName));
	}

	$imageTitle = $_POST['filetitle'];
	$imageDesc = $_POST['filedesc'];

	$file = $_FILES['file'];

	$fileName = $file['name'];
	$fileType = $file['type'];
	$fileTempName = $file['tmp_name'];
	$fileError = $file['error'];
	$fileSize = $file['size'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = ['jpg', 'jpeg', 'png', 'pdf'];

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 2000000) {
				$imageFullName =
					$newFileName .
					'.' .
					uniqid('', true) .
					'.' .
					$fileActualExt;

				$fileDestination = '../uploads/' . $imageFullName;
				print_r($fileDestination);

				if (empty($_POST['filetitle'] || empty($_POST['filedesc']))) {
					header('Location: ../index.php?upload=empty');
					exit();
				} else {
					$sql = 'SELECT * FROM gallery;';
					$stmt = mysqli_stmt_init($conn);

					if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo 'SQL statement failed';
					} else {
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);
						$rowCount = mysqli_num_rows($result);
						$setImageOrder = $rowCount + 1;

						$sql =
							'INSERT INTO gallery (imgFullNameGallery, titleGallery, descGallery, orderGallery) VALUES (?,?,?,?);';
						if (!mysqli_stmt_prepare($stmt, $sql)) {
							echo 'SQL statement failed';
						} else {
							mysqli_stmt_bind_param(
								$stmt,
								'ssss',
								$imageFullName,
								$imageTitle,
								$imageDesc,
								$setImageOrder
							);
							mysqli_stmt_execute($stmt);

							move_uploaded_file($fileTempName, $fileDestination);

							// header('Location: ../index.php?uploadsuccess');
						}
					}
				}
			} else {
				echo 'File size to large';
				exit();
			}
		} else {
			echo 'There was an error';
			exit();
		}
	} else {
		echo 'File type not accepted';
		exit();
	}
} else {
	header('Location: ../index.php');
}
