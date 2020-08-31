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
        parent::__construct('categories');

        return $this->selectAssoc();
    }

    public function categoryBy($id)
    {
        $this->setQuery(
            "SELECT * FROM categories INNER JOIN subcategories ON categories.id_category = subcategories.id_category WHERE categories.id_category = $id"
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
            prod.url_img as productImg,
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
            INNER JOIN subcategories as sub ON sub.id_subcategory = prod.id_subcategory 
            INNER JOIN categories as cat ON cat.id_category = sub.id_category 
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
            prod.url_img as productImg,
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
            INNER JOIN subcategories as sub ON sub.id_subcategory = prod.id_subcategory 
            INNER JOIN categories as cat ON cat.id_category = sub.id_category 
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
            prod.url_img as productImg,
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
            INNER JOIN subcategories as sub ON sub.id_subcategory = prod.id_subcategory 
            INNER JOIN categories as cat ON cat.id_category = sub.id_category 
            WHERE prod.id_subcategory = 44 OR prod.id_subcategory = 53 OR prod.id_subcategory = 45 OR prod.id_subcategory = 5
            ORDER BY id_product"
        );

        return $this->executeObject();
    }

    public function selectNameByCat($id)
    {
        $this->setQuery("SELECT categories.slug as slug FROM categories WHERE id_category = $id");

        return $this->executeAssoc();
    }
}
