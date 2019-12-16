<?php
namespace App\Models;

use Src\Core\Crud;

class Produtos extends Crud
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
}
