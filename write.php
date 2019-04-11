<?php
	unlink('message');
	if($file = fopen('message', 'a+'))
	{
		if(fputs($file, $_POST['user_message'])) echo "Message successfully written !";
		
	}
	else echo "Error when opening the files";
	
	fclose($file);
?>