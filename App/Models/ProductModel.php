<?php
namespace App\Models;

use Src\Core\Crud;

class ProductModel extends Crud
{
    protected $product;
    
    public function __construct($slug)
    {
        $this->loadProductBySlug($slug);
    }
    
    protected function loadProductBySlug($slug)
    {
        $this->setQuery(
            "SELECT
                *
            FROM
                products
            WHERE
                slug = '$slug'"
        );

        $this->product = $this->executeQuery()[0];
    }

    public function getName()
    {
        return $this->product->name;
    }

    public function getSku()
    {
        return $this->product->sku;
    }

    public function getPrice()
    {
        return $this->product->price;
    }

    public function getPriceBefore()
    {
        return $this->product->price_before;
    }

    public function getDescription()
    {
        return $this->product->description;
    }

    public function getImagePrincipal()
    {
        return DIR_IMG . 'products/' . str_replace('-', '', $this->getSku()) . '/' .  str_replace('-', '', $this->getSku()) . '_01.jpg';
    }
}
