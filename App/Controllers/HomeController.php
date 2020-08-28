<?php
namespace App\Controllers;

use Src\Core\Render;
use App\Models\CatalogModel;

class HomeController extends Render
{
    private $model;

    public function __construct()
    {
        $this->model = new CatalogModel();
    }
    
    public function index()
    {
        $this->setTitle('Home');
        $this->setDir('home');
        $this->renderTemplate();
    }

    public function getModel()
    {
        return $this->model;
    }
}
