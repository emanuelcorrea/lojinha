<?php
namespace App\Models;

use App\Interfaces\AdminUserInterface;
use App\Models\Abstracts\AbstractDashboardModel;

class DashboardModel extends AbstractDashboardModel implements
    AdminUserInterface
{
    /**
     * Get admin first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->getData(self::FIRST_NAME);
    }

    /**
     * Get admin last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->getData(self::LAST_NAME);
    }

    /**
     * Get admin full name
     * 
     * @return string
     */
    public function getFullName()
    {
        return $this->getData(self::FIRST_NAME) . ' ' . $this->getData(self::LAST_NAME);
    }

    /**
     * Get admin user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->getData(self::USER);
    }

    /**
     * Get admin group id
     *
     * @return int
     */
    public function getUserGroupId()
    {
        return $this->getData(self::USER_GROUP_ID);
    }

    /**
     * Get admin password
     *
     * @return double
     */
    public function getPassword()
    {
        return $this->getData(self::PASSWORD);
    }

    /**
     * Get admin user status
     *
     * @return double|null
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * Get admin user created date
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Get admin user updated date
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }
}
