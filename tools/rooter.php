<?php

class Rooter 
{
	public static function redirectUser($pageName)
	{
		header("Location: index.php?page=" . $pageName);
		exit;
	}
}

?>