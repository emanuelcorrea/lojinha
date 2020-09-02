<?php
namespace App\Models;

use App\Models\AbstractProductModel;

use App\Interfaces\ProductInterface;

class ProductModel extends AbstractProductModel implements ProductInterface
{
    /**
     * Get product name
     *
     * @return string
     */
    public function getName()
    {
        return $this->product->prodName;
    }

    /**
     * Get attribute group id
     *
     * @return int
     */
    public function getAttributeGroupId()
    {
        return $this->product->prodAttributeGroupId;
    }

    /**
     * Get product sku
     *
     * @return int|string
     */
    public function getSku()
    {
        return $this->product->prodSku;
    }

    /**
     * Get product price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->product->prodPrice;
    }

    /**
     * Get product price before
     *
     * @return double|null
     */
    public function getPriceBefore()
    {
        return $this->product->prodPricebefore;
    }

    /**
     * Get product description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->product->prodDescription;
    }

    /**
     * Get product status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->product->prodStatus;
    }

    /**
     * Get product type id
     *
     * @return int
     */
    public function getType()
    {
        return $this->product->prodType;
    }

    /**
     * Get product weight
     *
     * @return double|int
     */
    public function getWeight()
    {
        return $this->product->prodWeight;
    }

    /**
     * Get product created date
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->product->prodCreatedAt;
    }

    /**
     * Get product updated date
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->product->prodUpdatedAt;
    }

    /**
     * Get product image by index
     *
     * @param [type] $position
     * @return void
     */
    public function getImageByPosition($position)
    {
        return DIR_IMG . 'products/LJA000' . 
            str_replace('-', '', $this->getSku()) . '/LJA000' .  
            str_replace('-', '', $this->getSku()) . "_0$position.jpg";
    }

    /**
     * Get product quantity images
     *
     * @return void
     */
    public function getQtyImages()
    {
        $dir = DIR_REQ .'public/assets/images/products/LJA000' . str_replace('-', '', $this->getSku()) . '/';

        return count(scandir($dir)) - 2;
    }
}
