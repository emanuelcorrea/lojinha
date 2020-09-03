<?php
namespace App\Interfaces;

interface ProductInterface
{
    const SKU = 'prodSku';

    const NAME = 'prodName';

    const DESCRIPTION = 'prodDescription';

    const PRICE = 'prodPrice';

    const PRICE_BEFORE = 'prodPriceBefore';

    const WEIGHT = 'prodWeight';

    const STATUS = 'prodStatus';

    const ATTRIBUTE_GROUP_ID = 'prodAttributeGroupId';

    const ID_TYPE = 'prodType';

    const CREATED_AT = 'prodCreatedAt';

    const UPDATED_AT = 'prodUpdatedAt';

    const ATTRIBUTES = [
        self::SKU,
        self::NAME,
        self::DESCRIPTION,
        self::PRICE,
        self::WEIGHT,
        self::STATUS,
        self::ATTRIBUTE_GROUP_ID,
        self::ID_TYPE,
        self::CREATED_AT,
        self::UPDATED_AT
    ];

    /**
     * Get product name
     *
     * @return string
     */
    public function getName();

    /**
     * Get attribute group id
     *
     * @return int
     */
    public function getAttributeGroupId();

    /**
     * Get product sku
     *
     * @return int|string
     */
    public function getSku();

    /**
     * Get product price
     *
     * @return double
     */
    public function getPrice();

    /**
     * Get product price before
     *
     * @return double|null
     */
    public function getPriceBefore();

    /**
     * Get product status
     *
     * @return string
     */
    public function getStatus();

    /**
     * Get product description
     *
     * @return string
     */
    public function getDescription();

    /**
     * Get product type id
     *
     * @return int
     */
    public function getType();

    /**
     * Get product weight
     *
     * @return double|int
     */
    public function getWeight();

    /**
     * Get product created date
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * Get product updated date
     *
     * @return string
     */
    public function getUpdatedAt();
}
