<?php
	spl_autoload_register(function($className)
		{
			if( strpos($className,'Linq') === 0 && 
				is_file($file = $className .".php"))
				
				include $file;
	});
	
	
	$a = function(){
		echo "hey";
	};
	
	$cb = is_callable($a);
	
	echo '<pre>';
	
	$a = array("he" => 'me', '1','H' => 'asd',2=>3);
	
	$a = Linq\Linq::FromArray($a);
	var_dump($a);