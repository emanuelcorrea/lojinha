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
        return $this->product->prodSku;
    }

    public function getPrice()
    {
        return $this->product->prodPrice;
    }

    public function getPriceBefore()
    {
        return $this->product->prodPricebefore;
    }

    public function getDescription()
    {
        return $this->product->prodDescription;
    }

    public function getImageByPosition($position)
    {
        return DIR_IMG . 'products/LJA000' . 
            str_replace('-', '', $this->getSku()) . '/LJA000' .  
            str_replace('-', '', $this->getSku()) . "_0$position.jpg";
    }

    public function getQtyImages()
    {
        $dir = DIR_REQ .'public/assets/images/products/LJA000' . str_replace('-', '', $this->getSku()) . '/';

        return count(scandir($dir)) - 2;
    }
}
