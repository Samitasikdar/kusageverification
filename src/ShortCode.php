<?php

class ShortCode
{
	public function __construct( ) {
        
    }
	public function init() {
        add_action( 'init', array( $this, 'kus_age_verify_short_code' ) );
    }
	public function kus_age_verify_short_code()
	{
		add_shortcode( 'kus_age_verification', array( $this, 'kus_age_verify_handler' ) );
	}
	public function kus_age_verify_handler()
	{
		ob_start();
            include KUS_AGE_VERIFICATION_PATH . '/view/index.php';
            return ob_get_clean();
	}
	
}

?>