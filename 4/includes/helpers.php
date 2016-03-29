<?php
	


	function render($template, $data = [])
	{
		// full path 
		$path = __DIR__ . "/../templates/". $template . ".php"; 

		// check if this path do exict 
		if (file_exists($path)) {
			extract($data); 
			require($path);
		}
	}
	
?>