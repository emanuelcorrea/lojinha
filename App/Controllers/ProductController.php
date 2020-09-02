<?php
namespace App\Controllers;

use App\Models\ProductModel;
use Src\Traits\UrlParser;
use Src\Core\Render;

class ProductController extends Render
{
    use UrlParser;

    protected $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }
    
    public function slug($slug)
    {
        $this->product->loadBy('slug', $this->parserUrl()[2]);

        $this->setDir('product');
        $this->setTitle($this->product->getName());
        $this->renderTemplate();
    }

    public function getModel()
    {
        return $this->model;
    }
}
