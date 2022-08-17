<?php
//include_once 'Database.php';
?>
<html>

<head>
<title>Show Customers</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
<?php include 'include.php';?>

	<h1> Here is a list of customers</h1>

<?php
		
		
			//$Cust_ID = $_GET[]
			
			
		$DBConnect = mysqli_connect("itec315.frostburg.edu", "mbrimage0", "3113769","mbrimage0"); 
		
			if($DBConnect === false)
				print"unable to connect to the database, error number:".mysqli_error($DBConnect);
			
			else{
					$DBName = "mbrimage0";
					mysqli_select_db($DBConnect,$DBName);
					
					if(!mysqli_select_db($DBConnect,$DBName))
					print"There is no Database named: ".$DBName;
					
					else{
						$TableName= "customers";
						$SQLstring= "SELECT * From $TableName";
						$QueryResult = mysqli_query($DBConnect,$SQLstring);
						if(mysqli_num_rows($QueryResult)==0)
							print"There are no records in database ".$DBName;
						else{
							print "*******************";
						
							print"<table width = '100%' border='1'>";
							print"<tr><th>Cust_ID</th><th>F_NAME</th><th>L_NAME</th><th>Email</th><th>Message</th></tr>";
							//This is how we make it dynamic
							while(($Row = mysqli_fetch_assoc($QueryResult)) != false){
							
								print"<tr><td>{$Row['CUST_ID']}</td>";
								print"<td>{$Row['F_NAME']}</td>";
								print"<td>{$Row['L_NAME']}</td>";
								print"<td>{$Row['Email']}</td>";
								print"<td>{$Row['message']}</td></tr>";
							}//end while loop
							print"</table>";
						}//end there are records
						//mysqli_free_result($QueryResult); Apparently free reuslt is not needed
						
					}// there is a database
					mysqli_close($DBConnect);
					
			}	//end else					
?>
</body
</html>