<?php
	if($file = fopen('message', 'a+'))
	{
		if($line = fgets($file)) echo "Message: ".$line;
		fclose($file);
		
	}
	else echo "Error when reading the file";

	
	if($line == "hello") echo "</br></br>Succeed";
	else echo "</br></br>Failed";
?>