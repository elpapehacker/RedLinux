<?php
	/**
	 *
	 * @package RedLinux
	 * @version 1.0
	 *
	**/

	define('DB_HOST', 'localhost');
	define('DB_USER', 'rl_user');
	define('DB_PASS', 'tucaca12');
	define('DB_NAME', 'rl_database');
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