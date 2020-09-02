<?php
namespace App\Interfaces;

interface ProductInterface
{
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
