<?php
	spl_autoload_register(function($className)
		{
			if( strpos($className,'Linq') === 0 && 
				is_file($file = $className .".php"))
				
				include $file;
	});
	
	
	echo '<pre>';