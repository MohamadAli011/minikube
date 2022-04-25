<?php
 
/* author   : Riyanto
* website   : kangriyanto.wordpress.com
* facebook  : facebook.com/fr.mas.riyanto
*
* file: index.php
*/
spl_autoload_register(function($class){
require_once $class . '.php';
});
 
new Controller;