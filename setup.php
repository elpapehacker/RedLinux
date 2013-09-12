<?php
	/**
	 *
	 * @package RedLinux
	 * @version 1.0
	 *
	**/

	require_once( 'libs/Smarty/libs/Smarty.class.php' );

	/**
	 * Smarty Singlenton
	 * @version 1.0
	**/

	class ClassName extends AnotherClass
	{
		static private $instance;

		private function __construct() {}


		private function __clone() {}

		private function __wakeup() {}

		static public function instance()
		{

			if ( !isset( self::$instance ) )
			{

				$smarty = new Smarty;

				$smarty->setTemplateDir( 'templates/' );
				$smarty->setCompileDir( 'templates_c/' );
				$smarty->setConfigDir( 'configs/' );
				$smarty->setCacheDir( 'cache/' );

				$smarty->debugging = false;

				#define( 'CFG_DIR_TEMPLATES', $smarty->getTemplateDir(0) );

				self::$instance = $smarty;
			};
			return self::$instance = $smarty;

		}
	}
?>