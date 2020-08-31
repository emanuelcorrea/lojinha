<?php
namespace App\Models;

use Src\Core\Crud;

abstract clASs AbstractProductModel extends Crud
{
    protected $product;

    public function __construct() {}
    
    public function load($field, $value)
    {
        $this->setQuery(
            "SELECT 
                prod.id_product AS prodIdproduct,
                prod.name AS prodName, 
                prod.sku AS prodSku,
                prod.description AS prodDescription,
                prod.price AS prodPrice,
                prod.price_before AS prodPricebefore,
                prod.slug AS prodSlug,
                prod.rate AS prodRate,
                (SELECT name FROM categories WHERE id_category = cat.subcategory) AS catPrincipal,
                cat.id_category AS catIdcategory,
                cat.name AS catName,
                cat.subcategory AS catIdsubcategory,
                cat.slug AS catSlug,
                sub.id_subcategory AS subIdsubcategory,
                sub.id_category AS subIdcategory,
                sub.name AS subName,
                sub.slug AS subSlug
            FROM 
                products prod 
                INNER JOIN subcategories sub ON sub.id_subcategory = prod.id_subcategory
                INNER JOIN categories cat ON cat.id_category = sub.id_category
            WHERE
                prod.$field = '$value'"
        );

        $this->product = $this->executeQuery()[0];

        echo "<pre>";
        echo "SELECT *, prod.name AS prodName, sub.name AS subName, sub.slug AS subSlug, cat.name AS catName, cat.slug AS catSlug FROM products prod INNER JOIN subcategories sub ON sub.id_category = prod.id_subcategory INNER JOIN categories cat ON cat.id_category = sub.id_category WHERE prod.$field = '$value'";
        print_r($this->product);
        echo "</pre>";
    }
}