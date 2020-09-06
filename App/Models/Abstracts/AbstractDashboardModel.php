<?php
namespace App\Models\Abstracts;

abstract class AbstractDashboardModel extends AbstractModel
{
    public function authenticate($username, $password)
    {
        $username = $this->protect($username);
        $password = $this->protect($password);

        if ($this->loadAdminByUsername($username, $password)) {
            $_SESSION['admin'] = $this->getData();

            $this->setAdminActive();
        };
    }

    public function loadAdminByUsername($username, $password)
    {
        $this->setQuery(
            "SELECT
                admin.admin_id,
                admin.username,
                admin.email,
                admin.firstname,
                admin.lastname
            FROM
                admin_users admin
            WHERE
                admin.username = '$username' AND
                admin.password = '$password'"
        );

        if ($this->executeAssoc()) {
            $this->setData($this->executeAssoc()[0]);

            return true;
        }

        return null;
    }

    public function setAdminActive()
    {
        $this->setQuery(
            "UPDATE
                admin_users admin
            SET
                admin.active = 1
            WHERE 
                admin.admin_id = {$this->getData('admin_id')}"
        );

        $this->updateQuery();
        $this->insertAuthUser();

        $_SESSION['logged'] = true;
    }

    public function insertAuthUser()
    {
        $this->setQuery(
            "INSERT INTO
                admin_users_auth(
                    user_id
                )
            VALUES (
                {$this->getData('admin_id')}
            )"
        );

        $this->updateQuery();
    }
}
