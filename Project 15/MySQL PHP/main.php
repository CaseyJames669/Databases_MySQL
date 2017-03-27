<?php
	include("functions.php");
?>

<html><head><title>Connecting user</title></head>
<body>
<h3>
<?php
	$user = "user_id";
	$password = "password";
	$db_name = "database_name";
	
	$query = "SELECT * FROM table_name";
	
	# Connect to MySQL
	$conn = connectMySQL($user, $password);
	if ($conn)
		echo("Congratulations $user, you connected to MySQL.<br />");
	else
		echo("Sorry, can't connect to MySQL.<br />");
	
	# List all databases
	$db_list = list_dbs($conn);
	echo($db_list);
	
	# Select the specified database
	if (!selectDB($db_name, $conn))
		die ("Can't select list $db_name tables.");
	
	# List all tables from the database
	$list = list_db_tables($db_name);
	echo($list);
	
	# Run the specified query
	$rs = query_run($query, $conn);
	echo("<br /><br />" . $query); 
	
	# List all records from the specified table
	$result = get_data($rs);
	echo($result);
?>
</h3>
</body></html>
