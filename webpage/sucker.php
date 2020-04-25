<?php 
if( isset($_REQUEST["name"]) &&
	($_REQUEST["name"] != "") &&
	isset($_REQUEST["ID"]) &&
	($_REQUEST["ID"] != "") &&
	isset($_REQUEST["sections"]) &&
	($_REQUEST["sections"] != "") &&
	isset($_REQUEST["cardNumber"]) &&
	($_REQUEST["cardNumber"] != "") &&
	isset($_REQUEST["cardType"])){
?>

<?php
	file_put_contents("sucker.txt", $_POST["name"], FILE_APPEND);
		file_put_contents("sucker.txt", ";", FILE_APPEND);
	file_put_contents("sucker.txt", $_POST["ID"], FILE_APPEND);
		file_put_contents("sucker.txt", ";", FILE_APPEND);
	file_put_contents("sucker.txt", $_POST["sections"], FILE_APPEND);
		file_put_contents("sucker.txt", ";", FILE_APPEND);
	file_put_contents("sucker.txt", $_POST["cardNumber"], FILE_APPEND);
		file_put_contents("sucker.txt", ";", FILE_APPEND);
	file_put_contents("sucker.txt", $_POST["cardType"], FILE_APPEND);
		file_put_contents("sucker.txt", "\n", FILE_APPEND);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0075)http://www.webstepbook.com/supplements/labsection/lab4-buyagrade/sucker.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Student Name</dt>
			<dd> <?= $_POST["name"] ?> </dd>

			<dt>Student ID</dt>
			<dd> <?= $_POST["ID"] ?> </dd>

			<dt>Section Number</dt>
			<dd><?= $_POST["sections"] ?></dd>

			<dt>Credit Card Details</dt>
			<dd><?= $_POST["cardNumber"]?>(<?= $_POST["cardType"] ?>)</dd>
		</dl>

		<p>Here are all the suckers who have submitted here:</p>

		<p>
			<?php
			$lines = file("sucker.txt");
				foreach ($lines as $line) {
			?>
				<li style="list-style: none; font-family: courier;font-size: 13px;"> <?= $line ?> </li>
			<?php
				}
			?>
		</p>

  	</body>

  </html>

<?php
}
else{
	header('Location: error.php');
}
?>
<!-- k.k the_teacher -->