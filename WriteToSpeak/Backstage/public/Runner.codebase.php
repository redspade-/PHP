<?php

	/**
	 *	Runner.codebase.php
	 *
	 *	Main execution line of the request.
	 **/
	
	set_include_path(
						get_include_path() . PATH_SEPARATOR .
						dirname( dirname( dirname( dirname( __FILE__) ) ) ) . DIRECTORY_SEPARATOR . 'Library' . PATH_SEPARATOR . 
						dirname( dirname( __FILE__ ) ) . PATH_SEPARATOR .
						dirname( dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR . 'entities'
					);
	
	if( function_exists( 'spl_autoload_register' ) ) {
		require_once( 'Jellyfish' . DIRECTORY_SEPARATOR . 'Loader' . DIRECTORY_SEPARATOR . 'AutoLoader.class.php' );
		spl_autoload_register( array( 'Jellyfish_Loader_AutoLoader', 'autoLoad' ) );
		spl_autoload_extensions( '.abstract.php,.class.php,.interface.php' );
	}
	
	$application = new Application();
	$application->run();