<?php
    namespace MF\Init;

    abstract class Bootstrap{
        private $routes;

        abstract protected function initRoutes();
        
        public function __construct(){
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        public function getRoutes(){
            return $this->routes;
        }

        public function setRoutes(array $routes){
            $this->routes = $routes;
        }

        protected function run($url){

            foreach($this->getRoutes() as $key => $value){

                if($value['route'] == $url){
                    $class = 'App\\Controllers\\'.ucfirst($value['controller']);

                    $action = $value['action'];

                    $controller = new $class;

                    $controller->$action();
                }
            }
        }

        protected function getUrl(){
             return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        }
    }

?>