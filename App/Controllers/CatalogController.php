<?php
namespace App\Controllers;

use Src\Core\Render;
use App\Models\CatalogModel;
use App\Models\ProductModel;

class CatalogController extends Render
{
    private $model;
    protected $catalog;

    public function __construct()
    {
        $this->model = new CatalogModel();
        $this->catalog = new CatalogModel();
        $this->product = new ProductModel();
    }
    
    public function index()
    {
        $this->setTitle('Página Inicial');
        $this->setDir('catalog');
        $this->renderTemplate();
    }

    public function getModel()
    {
        return $this->model;
    }
}
