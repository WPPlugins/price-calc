<?php

/**
 * entry file for back-end settings screen
 * 
 * (c) 2009 by Igor Prochazka (thickthumb.com)
 */


if(!is_admin()) die();

require_once( PRICE_CALC_CONTROL . 'Phrases.php' );

$back = new Phrases();
$back->action();

?>