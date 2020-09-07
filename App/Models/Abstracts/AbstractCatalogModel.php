<?php
namespace App\Models\Abstracts;

class AbstractCatalogModel extends AbstractModel
{
    /**
     * Get products sku by categories
     *
     * @param array $categories
     * @return object
     */
    public function getProductsByCategories($categories)
    {
        $conditions = $this->buildConditionsByCategories($categories);

        $this->setQuery(
            "SELECT
                prod.sku AS prodSku
            FROM 
                products AS prod 
            INNER JOIN 
                products_subcategories AS sub ON sub.id_subcategory = prod.id_subcategory 
            INNER JOIN 
                products_categories AS cat ON cat.id_category = sub.id_category 
            WHERE
                prod.id_subcategory IN ($conditions)
            ORDER BY 
                id_product"
        );

        $this->setData($this->executeAssoc()[0]);
        
        return $this->executeObject();
    }


    /**
     * Does the line WHERE by categories
     *
     * @param array $data
     * @return string
     */
    public function buildConditionsByCategories($data)
    {
        $condition = '';

        foreach ($data as $key => $value) {
            $condition .= "$value, ";
        }

        $conditions = substr($condition, 0, -2);

        return $conditions;
    }
}
