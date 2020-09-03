<?php
namespace App\Models;

abstract class AbstractModel extends \Src\Core\Crud
{
    protected $data = [];

    /**
     * Get the value of data
     *
     * @param string $index
     * @return mixed
     */
    protected function getData($index)
    {
        if (isset($this->data[$index])) {
            return $this->data[$index];
        }

        return null;
    }

    /**
     * Set values to data
     *
     * @param array $data
     * @return mixed
     */
    protected function setData($data)
    {
        if ((array) $data) {
            $this->data = $data;

            return $this;
        }

        return null;
    }
}