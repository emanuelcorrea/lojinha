<?php
namespace App;

use Src\Core\Router;

class Dispatch extends Router
{
    private $obj, $method, $param = [];
    
    public function __construct()
    {
        $this->addController();
    }

    public function addController()
    {
        $route = $this->getRoute();
        $namespace = "App\\Controllers\\{$route}";

        $this->obj = new $namespace;
        
        if (isset($this->parserUrl()[1]) && !empty($this->parserUrl()[1])) {
            $this->setMethod("{$this->parserUrl()[1]}");
        } else {
            $this->setMethod('index');
        }

        $this->addMethod();
    }

    public function addMethod()
    {
        if (method_exists($this->obj, $this->getMethod())) {
            $this->addParam();

            call_user_func_array([$this->obj, $this->getMethod()], $this->getParam());
        } else {
            print_r("metodo: ". $this->getMethod());
        }
    }

    public function addParam()
    {
        $count = count($this->parserUrl());

        if ($count > 2) {
            foreach ($this->parserUrl() as $key => $value) {
                if ($key > 1) {
                    $this->setParam($this->param += [$key => $value]);
                }
            }
        }

    }

    public function getMethod() {
        return $this->method;
    }

    public function setMethod($method) {
        $this->method = $method;
    }

    public function getParam() {
        return $this->param;
    }

    public function setParam($param) {
        $this->param = $param;
    }
}