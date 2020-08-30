<?php
namespace App\Models;

use App\Models\AbstractProductModel;

class ProductModel extends AbstractProductModel
{
    public function __construct() {}

    public function getName()
    {
        return $this->product->prodName;
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

    public function getCollectionImages()
    {

    }

    public function getFirstImage()
    {
        return DIR_IMG . 'products/' . 
            str_replace('-', '', $this->getSku()) . '/' .  
            str_replace('-', '', $this->getSku()) . '_01.jpg';
    }
}