<?php

class KusAgeVerification
{
	private static $_instance;
	public static function init() {
        if( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * Constructor
     */
    public function __construct()
    {   
        $this->run();
    }

    /**
     * Instantiate all plugin components and kickoff the plugin
     */
    public function run() {
        ( new Assets() )->init();
        /*$form_handler = new FormHandler();
        $form_handler->init();
        $form_handler->attach( new \Kus\Form\Listener\EmailListener() );
        $form_handler->attach( new \Kus\Form\Listener\SmsListener() );*/
        ( new ShortCode( ) )->init();
    }
}
?>