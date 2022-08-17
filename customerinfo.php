<?php
include_once 'Database.php';
?>
<html>

<head>
<title>Customer Info</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
<?php include 'include.php';?>

	<h1> Thanks for your interest, someone will contact you shortly!</h1>

<?php

	if(empty($_POST['FName'])||empty($_POST['LName'])||empty($_POST['message'])||empty($_POST['email']))
		print"You must complete the contact form entirely.";
	else{//Establish DB connection

		$db=new Database();
		$FName = stripslashes($_POST['FName']);
		$LName = stripslashes($_POST['LName']);
		$message = stripslashes($_POST['message']);
		$Email = stripslashes($_POST['email']);
		$db->insert_update_delete("insert into customers values(NULL,'$FName','$LName','$Email','$message')");
	} 

?>
</body
</html>