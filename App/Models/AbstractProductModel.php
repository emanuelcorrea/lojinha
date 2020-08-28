<?php
namespace App\Models;

use Src\Core\Crud;

abstract class AbstractProductModel extends Crud
{
    public function __construct(
        array $data
    ) {
        $this->loadProductBySlug($data['slug']);
    }

    private function loadProductBySlug($slug)
    {
        $this->setQuery(
            "SELECT
                *,
                sub.name AS subName,
                sub.slug AS subSlug,
                cat.name AS catName,
                cat.slug AS catSlug
            FROM
                products prod
                INNER JOIN subcategories sub ON sub.id_category = prod.id_subcategory
                INNER JOIN categories cat ON cat.id_category = sub.id_category
            WHERE
                prod.slug = '$slug'"
        );

        $this->product = $this->executeQuery()[0];

        echo "<pre>";
        print_r($this->product);
        echo "</pre>";
    }
}