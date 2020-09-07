<?php
namespace App\Models;

use App\Models\Abstracts\AbstractCatalogModel;

class CatalogModel extends AbstractCatalogModel
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

    public function catalogListProducts($categories)
    {
        return $this->getProductsByCategories($categories);
    }

    public function selectNameByCat($id)
    {
        $this->setQuery("SELECT products_categories.slug as slug FROM products_categories WHERE id_category = $id");

        return $this->executeAssoc();
    }
}
