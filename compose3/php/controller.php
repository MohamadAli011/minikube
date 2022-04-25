<?php
 
/* author   : Riyanto
* website   : kangriyanto.wordpress.com
* facebook  : facebook.com/fr.mas.riyanto
*
* file: controller.php
*/
class Controller {
 
public function __construct() {
$model = new Model;
$data = $model->show_message();
 
require_once 'view.php';
}
 
}