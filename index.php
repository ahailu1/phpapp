<?php
$controller = dirname(__FILE__) . '\Controllers\api\basecontroller.php';
require_once($controller);
        $controller = new BaseController();
        $controller->getUri();
print 'hello worlds';   
?>

