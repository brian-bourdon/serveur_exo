<?php
if(file_exists('message'))
{
	if($file = fopen('message', 'a+'))
	{
		if($line = fgets($file)) echo "Message: ".$line;
		
	}
	else echo "Error when reading the file";
}
else "File does not exist";
	
	fclose($file);
?>