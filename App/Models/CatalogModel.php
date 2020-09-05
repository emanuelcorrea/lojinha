<?php
namespace App\Models;

use Src\Core\Crud;

class CatalogModel extends Crud
{
    public function __construct()
    {
        parent::__construct('products');
    }

    public function getAllCategory()
    {
        parent::__construct('products_categories');

        return $this->selectAssoc();
    }

    public function categoryBy($id)
    {
        $this->setQuery(
            "SELECT * FROM products_categories INNER JOIN products_subcategories ON products_categories.id_category = products_subcategories.id_category WHERE products_categories.id_category = $id"
        );

        return $this->executeQuery();
    }

    public function selectCamisas()
    {
        
        $this->setQuery("
            SELECT prod.name as productName, 
            prod.sku as prodSku,
            prod.price as productPrice,
            prod.price_before as productPriceBefore,
            prod.slug as productSlug,
            prod.rate as productRate,
            sub.id_subcategory as subcatId,
            sub.name as subcatName,
            sub.id_category as subcatIdCategory,
            sub.slug as subSlug,
            cat.id_category as catId,
            cat.name as catName,
            cat.subcategory as catSub,
            cat.slug as catSlug
            FROM products as prod 
            INNER JOIN products_subcategories as sub ON sub.id_subcategory = prod.id_subcategory 
            INNER JOIN products_categories as cat ON cat.id_category = sub.id_category 
            WHERE prod.id_subcategory = 10 OR prod.id_subcategory = 30
            ORDER BY id_product"
        );

        return $this->executeObject();
    }

    public function selectCalcas()
    {
        $this->setQuery(
            "
            SELECT prod.name as productName, 
            prod.price as productPrice,
            prod.price_before as productPriceBefore,
            prod.slug as productSlug,
            prod.rate as productRate,
            sub.id_subcategory as subcatId,
            sub.name as subcatName,
            sub.id_category as subcatIdCategory,
            sub.slug as subSlug,
            cat.id_category as catId,
            cat.name as catName,
            cat.subcategory as catSub,
            cat.slug as catSlug
            FROM products as prod 
            INNER JOIN products_subcategories as sub ON sub.id_subcategory = prod.id_subcategory 
            INNER JOIN products_categories as cat ON cat.id_category = sub.id_category 
            WHERE prod.id_subcategory IN (28, 29, 13, 14, 16)
            ORDER BY id_product"
        );

        return $this->executeObject();
    }

    public function selectCalcados()
    {
        $this->setQuery(
            "
            SELECT prod.name as productName, 
            prod.price as productPrice,
            prod.price_before as productPriceBefore,
            prod.slug as productSlug,
            prod.rate as productRate,
            sub.id_subcategory as subcatId,
            sub.name as subcatName,
            sub.id_category as subcatIdCategory,
            sub.slug as subSlug,
            cat.id_category as catId,
            cat.name as catName,
            cat.subcategory as catSub,
            cat.slug as catSlug
            FROM products as prod 
            INNER JOIN products_subcategories as sub ON sub.id_subcategory = prod.id_subcategory 
            INNER JOIN products_categories as cat ON cat.id_category = sub.id_category 
            WHERE prod.id_subcategory = 44 OR prod.id_subcategory = 53 OR prod.id_subcategory = 45 OR prod.id_subcategory = 5
            ORDER BY id_product"
        );

        return $this->executeObject();
    }

    public function selectNameByCat($id)
    {
        $this->setQuery("SELECT products_categories.slug as slug FROM products_categories WHERE id_category = $id");

        return $this->executeAssoc();
    }
}
