<?php
namespace App\Interfaces;

interface AdminUserInterface
{
    const FIRST_NAME = 'firstname';

    const LAST_NAME = 'lastname';

    const EMAIL = 'email';

    const USER = 'user';

    const USER_GROUP_ID = 'id_user_group';

    const PASSWORD = 'password';

    const STATUS = 'status';
    
    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    const FIELDS = [
        self::FIRST_NAME,
        self::LAST_NAME,
        self::EMAIL,
        self::USER,
        self::USER_GROUP_ID,
        self::PASSWORD,
        self::STATUS,
        self::CREATED_AT,
        self::UPDATED_AT
    ];

    /**
     * Get admin first name
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Get admin last name
     *
     * @return string
     */
    public function getLastName();

    /**
     * Get admin full name
     * 
     * @return string
     */
    public function getFullName();

    /**
     * Get admin user
     *
     * @return string
     */
    public function getUser();

    /**
     * Get admin group id
     *
     * @return int
     */
    public function getUserGroupId();

    /**
     * Get admin password
     *
     * @return double
     */
    public function getPassword();

    /**
     * Get admin user status
     *
     * @return double|null
     */
    public function getStatus();

    /**
     * Get admin user created date
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * Get admin user updated date
     *
     * @return string
     */
    public function getUpdatedAt();
}
