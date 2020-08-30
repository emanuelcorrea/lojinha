<?php
namespace App\Controllers;

use Src\Core\Render;
use Src\Traits\UrlParser;
use App\Models\ProductModel;

class ProductController extends Render
{
    public $model;

    use UrlParser;

    public function __construct()
    {
        $this->model = new ProductModel();
        
        $this->model->load('slug', $this->parserUrl()[2]);
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
