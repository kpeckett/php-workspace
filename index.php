<?php
/** 
 * This page does almost nothing.
 * All it does is load load.php and start the session.
 * 
 * The GET and POST parameters control which "page" is to be loaded.
 * A .htaccess file can be used to show a regular directory structure in the address bar
 * 
 * @since 0.0.1
 * 
 */

/** @ignore */
require 'load.php';

/** Set the PAGE constant to the ?page parameter */
define("PAGE", $_GET["page"]);
?>
