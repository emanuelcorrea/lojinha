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

    /**
     * Get the value of session
     *
     * @param string $index
     * @return mixed
     */
    public function getSession($index = false)
    {
        if ($index) {
            if (isset($_SESSION['admin'][$index])) {
                return $_SESSION['admin'][$index];
            }
        }

        if (!empty($_SESSION['admin'])) {
            return $_SESSION['admin'];
        }
    }

    /**
     * Set values to session
     *
     * @param array $data
     * @return mixed
     */
    protected function setSession($index, $data)
    {
        if ($data) {
            $_SESSION[$index] = $data;

            return $this;
        }

        return null;
    }
}