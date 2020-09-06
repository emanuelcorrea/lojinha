<?php
namespace App\Models;

use App\Interfaces\AdminUserInterface;
use App\Models\Abstracts\AbstractDashboardModel;

class DashboardModel extends AbstractDashboardModel implements
    AdminUserInterface
{
    /**
     * Get admin id
     *
     * @return int
     */
    public function getAdminId() {
        return $this->getSession(self::ADMIN_ID);
    }
    
    /**
     * Get admin first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->getSession(self::FIRST_NAME);
    }

    /**
     * Get admin last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->getSession(self::LAST_NAME);
    }

    /**
     * Get admin full name
     * 
     * @return string
     */
    public function getFullName()
    {
        return $this->getSession(self::FIRST_NAME) . ' ' . $this->getSession(self::LAST_NAME);
    }

    /**
     * Get admin user
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->getSession(self::USERNAME);
    }

    /**
     * Get admin group id
     *
     * @return int
     */
    public function getUserGroupId()
    {
        return $this->getSession(self::USER_GROUP_ID);
    }

    /**
     * Get admin password
     *
     * @return double
     */
    public function getPassword()
    {
        return $this->getSession(self::PASSWORD);
    }

    /**
     * Get admin user status
     *
     * @return double|null
     */
    public function getStatus()
    {
        return $this->getSession(self::STATUS);
    }

    /**
     * Get admin user created date
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getSession(self::CREATED_AT);
    }

    /**
     * Get admin user updated date
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getSession(self::UPDATED_AT);
    }

    /**
     * Verify session status
     *
     * @return bool
     */
    public function isSessionExists()
    {
        if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
            return false;
        }

        return true;
    }
}
