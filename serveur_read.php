<?php
	if($file = fopen('message', 'a+'))
	{
		if($line = fgets($file)) echo "Message: ".$line;
		
	}
	else echo "Error when reading the file";
	
	fclose($file);
	
	if($line == "hello") echo "</br></br>Succeed";
	else echo "</br></br>Failed";
?>