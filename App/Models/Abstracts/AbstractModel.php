<?php
namespace App\Models\Abstracts;

abstract class AbstractModel extends \Src\Core\Crud
{
    private $data = [];

    /**
     * Get the value of data
     *
     * @param string $index
     * @return mixed
     */
    public function getData($index = false)
    {
        if ($index) {
            if (isset($this->data[$index])) {
                return $this->data[$index];
            }
        }

        if (!empty($this->data)) {
            return $this->data;
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