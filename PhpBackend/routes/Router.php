<?php
namespace PhpApp;
class Router {
    public $uri;
//get url name
// if url name is this/ then forward there
   function __construct($uri) {
       $data = file_get_contents('php://input');
        switch($uri) {
            case '/':
                print 'hello';
            case '/api/createaccount' :
                $arr =json_decode($data, true);   
                //new CreateAccount($arr);
            case '/api/login' :
                print 'loging';
        }
   }

   public function getPostData() {
        $postData = file_get_contents("php://input");
        $item = json_decode($postData);
        return $item;
   }
}


?>