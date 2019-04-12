<?php
	if($file = fopen('message', 'a+'))
	{
		if($line = fgets($file)) echo "Message: ".$line;
		fclose($file);
		
	}
	else echo "Error when reading the file";

	if(isset($line))
	{
		if($line == "hello")
		{
			
			if($file = fopen('message', 'a+'))
			{
				//reponse serveur
				if(fputs($file, '\n200 OK')) echo "</br>200 OK";
				
			}
			else echo "Error when opening the files";
			
			fclose($file);
			
		}
		else
		{
			//reponse serveur
			if($file = fopen('message', 'a+'))
			{
				if(fputs($file, '\nERROR 500')) echo "</br>ERROR 500";
				
			}
			else echo "Error when opening the files";
			
			fclose($file);
		}
	}
?>