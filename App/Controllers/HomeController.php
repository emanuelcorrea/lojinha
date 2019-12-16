<?php
namespace App\Controllers;

use Src\Core\Render;

use App\Models\Produtos;

class HomeController extends Render
{
    private $model;

    public function __construct()
    {
        $this->model = new Produtos;
    }
    
    
    public function index()
    {
        $this->setTitle('Home');
        $this->setDir('home');
        $this->renderTemplate();
    }

    public function getModel() {
        return $this->model;
    }
}
