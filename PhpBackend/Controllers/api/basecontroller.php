<?php
namespace PhpApp\Controllers\Api;
class BaseController {
    public $hello;

    public function __construct(){
        $item = $_SERVER['REQUEST_URI'];
        echo 'contsructor initilaized';
        print $item;    
        $this->hello = $item;
    }
    public function getUri(){
        echo 'hello idiot   ';
       $uri = parse_url($_SERVER['REQUEST_URI']);
       return $uri;
       foreach($uri as $item) {
           echo $item;
       }

    }


}













?>