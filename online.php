<?php
$connection = mysql_connect('127.0.0.1','root','bigtime');
mysql_select_db('psodb', $connection);
		$query = mysql_query('SELECT * FROM account_data WHERE islogged > 0');
    	$rows = mysql_num_rows($query);
   		if($rows == 0){
   			$playersOnline = "0 players online";
    	} elseif($rows == 1){
    			$playersOnline = "1 player online";
    	} elseif($rows > 1){
    			$playersOnline = $rows." players online";
    	} else {
    			$playersOnline = "Error occured";
    	}
?>