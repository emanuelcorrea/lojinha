<?php
namespace App\Controllers;

use App\Models\ProductModel;
use Src\Traits\UrlParser;
use Src\Core\Render;
use Src\Traits\ProtectString;

class ProductController extends Render
{
    use UrlParser;
    use ProtectString;

    protected $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }
    
    public function slug(string $slug)
    {
        $slug = $this->protect($slug);
        
        $this->product->loadBy('slug', $slug);

        $this->setDir('product');
        $this->setTitle($this->product->getName());
        $this->renderTemplate();
    }

    public function getModel()
    {
        return $this->model;
    }
}
