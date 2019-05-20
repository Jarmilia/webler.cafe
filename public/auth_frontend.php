<?php 
    // authentifizierung des Users im Frontend:
	session_start();

    if (isset($_SESSION['group_id']))
    {
    	// hasPermission überprüft die Rechte des Nutzers
     	function hasPermission($name)
	    {
	    	global $dbConnect;

	    	$name = trim($name);

	    	$query = mysqli_query($dbConnect, 
        	    		"SELECT access_allowed 
                			FROM cfmpermissions 
                    			WHERE cfmpermissions.name = '" . $name . "'
                    			   AND group_id = " . $_SESSION['group_id']);

	    	return mysqli_fetch_assoc($query)['access_allowed'] ?? false;
	    }
    }
?>