<?php
	# Connect to MySQL
	function connectMySQL($user, $password)
	{	
		$conn = mysql_connect("localhost", $user, $password);
	
		return $conn;		
	}

	# List all databases
	function list_dbs($conn)
	{	
		$rs = mysql_list_dbs($conn);
		
		$db_list = "<br>" . "Databases" . "</br><br>";
		for ($row = 0; $row < mysql_num_rows($rs); $row++)
			$db_list .= mysql_tablename($rs, $row) . "<br>";
		
		return $db_list;
	}
	
	# Select the specified database
	function selectDB($db_name, $conn)
	{	
		$rs = mysql_select_db($db_name,$conn)
			or die("Could not select $db_name database");
	
		return $rs;
	}

	# List all tables from the database
	function list_db_tables($db_name)
	{	
		$rs = mysql_list_tables($db_name);
		
		$list = "<br>" . $db_name . "</br><br>";
		for ($row = 0; $row < mysql_num_rows($rs); $row++)
		{
			$list .= " - " . mysql_tablename($rs, $row) . "<br>";
		}
		
		return $list;
	}

	# Run the specified query
	function query_run($query, $conn)
	{	
		$rs = mysql_query($query, $conn)
		or die("Can't execute query: $query"); 
		
		return $rs;
	}

	# List all records from the specified table
	function get_data($rs)
	{	
		$list = "<br><br><table>";
		for ($counter = 0; $row = mysql_fetch_row($rs); $counter++)
		{
			$list .= "<tr>";
			foreach($row as $key => $value)
				$list .= "<td>$value</td>";
			$list .= "</tr>";
		}
		$list .= "</table>";
		
		return $list;
	}
?>
