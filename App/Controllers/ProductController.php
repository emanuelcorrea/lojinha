<?php
namespace App\Controllers;

use Src\Core\Render;

use App\Models\Products;

class ProductController extends Render
{
    private $model;
    
    public function __construct()
    {
        $this->model = new Products;
    }

    public function slug($slug)
    {
        $this->setTitle('Produto');
        $this->setDir('product');
        $this->renderTemplate();
    }

    public function getModel()
    {
        return $this->model;
    }
}
