<?php
	/**
	 *
	 * @package RedLinux
	 * @version 1.0
	 *
	**/
	if ( !defined( 'ABSPATH' ) )
		define( 'ABSPATH', dirname(__FILE__) . '/' );

	if ( USE_SMARTY == true ) {

		require_once( 'libs/Smarty/libs/Smarty.class.php' );
		//require_once( 'database.php' );

		$smarty = new Smarty();

		$smarty->setTemplateDir( 'templates/' );
		$smarty->setCompileDir( 'templates_c/' );
		$smarty->setConfigDir( 'configs/' );
		$smarty->setCacheDir( 'cache/' );

		$smarty->assign( 'title', 'RedLinux' );
		$smarty->assign( 'slogan', 'The RedLinux Community' );
		$smarty->display( 'index.tpl' );

	} else {

		echo "mundo";

	}
?>