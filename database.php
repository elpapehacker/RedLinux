<?php
	/**
	 *
	 * @package RedLinux
	 * @version 1.0
	 *
	**/

	define('DB_HOST', 'localhost');
	define('DB_USER', 'lol');
	define('DB_PASS', 'lol');
	define('DB_NAME', 'lol');
	define('DB_PORT', '5432');

	/**
	* Query
	* @version 1.0
	**/
	class Query
	{
		
		function get_user()
		{
			$conn = pg_connect("user=" . DB_USER . "port=" . DB_PORT . "dbname=" . DB_NAME . "host=" . DB_HOST );
			$user = null;
			if ( $conn ) {
				$result = pg_quer
			}
		}

	}

?>