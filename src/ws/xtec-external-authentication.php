<?php

//XTEC ************ FITXER AFEGIT - Autenticació per colex
//2013.09.25

/** Sets up the WordPress Environment. */
require( dirname(__FILE__) . '/../wp-load.php' );

print_r(xtec_authenticate($_POST['username'],$_POST['password']));
