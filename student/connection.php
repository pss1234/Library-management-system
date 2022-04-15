<?php

	$db=mysqli_connect("localhost:3307","root","","library");  
					/* server name, username, passwor, database name */
					if(!$db)
					{
                       die("Connection failed:" .mysqli_connect_error());
					}
					//echo "Connected successfully.";

?>