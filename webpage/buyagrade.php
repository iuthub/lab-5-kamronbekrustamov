<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in INHA University policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.5 in this course is cold, hard, cash.
		</p>
		
		<hr />
		
		<h2>Give Us Your Money</h2>
		<form action="sucker.php" method="post">
			<dl>
				<dt>Student Name</dt>
					<dd>
						<input type="text" name="name">
					</dd>

				<dt>Student ID</dt>
					<dd>
						<input type="text" name="ID" value="U">
					</dd>
				
				<dt>Section Number</dt>
					<dd>
						<select name="sections">
							<option value="">(Select a section)</option>
							<option value="001">001</option>
							<option value="002">002</option>
							<option value="003">003</option>
							<option value="004">004</option>
							<option value="005">005</option>
						</select>
					</dd>
				
				<dt>Credit Card Details</dt>
					<dd>
						<input type="text" name="cardNumber">
					</dd>
					<dd>
						<input type="radio" value="Visa" name="cardType"> Visa
						<input type="radio" value="MasterCard" name="cardType"> MasterCard
					</dd>
			</dl>
			<input type="submit" value="You are a giant sucker.">
		</form>
	</body>
</html>