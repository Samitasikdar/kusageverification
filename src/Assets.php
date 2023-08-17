<?php
class Assets
{
	public function init() {
        add_action( 'wp_enqueue_scripts', array( $this, 'register_assets' ), 20 );
    }

    /**
     * Load all assets
     */
    public function register_assets() {

        wp_enqueue_style( 
            'kus-age-verification-style',
            $this->get_css_file_base_uri( 'style.css' ),
            [],
            false
        );

        wp_enqueue_script(
            'kus-age-verification',
            $this->get_js_file_base_uri( 'script.js' ),
            array( 'jquery' ),
            false,
            true
        );
    }

    /**
     * Get css base uri
     * 
     * @param string $file_name
     * @return string
     */
    public function get_css_file_base_uri( $file_name ) {
        return ( defined( 'KUS_AGE_VERIFICATION_PATH' ) == true ) ? KUS_AGE_VERIFICATION_PATH . 'assets/css/' . $file_name : '';
    }

    /**
     * Get css base uri
     * 
     * @param string $file_name
     * @return string
     */
    public function get_js_file_base_uri( $file_name ) {
        return ( defined( 'KUS_AGE_VERIFICATION_PATH' ) == true ) ? KUS_AGE_VERIFICATION_PATH . 'assets/js/' . $file_name : '';
    }
}
?>