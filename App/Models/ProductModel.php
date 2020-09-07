<?php
namespace App\Models;

use App\Models\Abstracts\AbstractProductModel;

use App\Interfaces\ProductInterface;

class ProductModel extends AbstractProductModel implements
    ProductInterface
{
    /**
     * Get product name
     *
     * @return string
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Get product slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->getData(self::SLUG);
    }

    /**
     * Get attribute group id
     *
     * @return int
     */
    public function getAttributeGroupId()
    {
        return $this->getData(self::ATTRIBUTE_GROUP_ID);
    }

    /**
     * Get product sku
     *
     * @return int|string
     */
    public function getSku()
    {
        return $this->getData(self::SKU);
    }

    /**
     * Get product price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->getData(self::PRICE);
    }

    /**
     * Get product price before
     *
     * @return double|null
     */
    public function getPriceBefore()
    {
        return $this->getData(self::PRICE_BEFORE);
    }

    /**
     * Get product description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * Get product status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * Get product type id
     *
     * @return int
     */
    public function getType()
    {
        return $this->getData(self::ID_TYPE);
    }

    /**
     * Get product weight
     *
     * @return double|int
     */
    public function getWeight()
    {
        return $this->getData(self::WEIGHT);
    }

    /**
     * Get product created date
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Get product updated date
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
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
