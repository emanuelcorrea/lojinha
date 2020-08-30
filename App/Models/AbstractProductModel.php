<?php
namespace App\Models;

use Src\Core\Crud;

abstract class AbstractProductModel extends Crud
{
    protected $product;

    public function __construct() {}
    
    public function load($field, $value)
    {
        $this->setQuery(
            "SELECT
                *,
                prod.name as prodName,
                sub.name AS subName,
                sub.slug AS subSlug,
                cat.name AS catName,
                cat.slug AS catSlug
            FROM
                products prod
                INNER JOIN subcategories sub ON sub.id_category = prod.id_subcategory
                INNER JOIN categories cat ON cat.id_category = sub.id_category
            WHERE
                prod.$field = '$value'"
        );

        $this->product = $this->executeQuery()[0];

        echo "<pre>";
        echo "SELECT *, prod.name as prodName, sub.name AS subName, sub.slug AS subSlug, cat.name AS catName, cat.slug AS catSlug FROM products prod INNER JOIN subcategories sub ON sub.id_category = prod.id_subcategory INNER JOIN categories cat ON cat.id_category = sub.id_category WHERE prod.$field = '$value'";
        print_r($this->product);
        echo "</pre>";
    }
}