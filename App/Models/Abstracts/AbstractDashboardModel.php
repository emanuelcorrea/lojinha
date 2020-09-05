<?php
namespace App\Models\Abstracts;

abstract class AbstractDashboardModel extends AbstractModel
{
    public function authenticate($email, $password)
    {
        $user = $this->protect($email);
        $password = $this->protect($password);

        if ($this->loadAdminByUser($user, $password)) {
            $_SESSION['logged'] = true;
        };
    }

    public function loadAdminByUser($user, $password)
    {
        $this->setQuery(
            "SELECT
                *
            FROM
                admin_users admin
            WHERE
                admin.user = '$user' AND
                admin.password = '$password'"
        );

        if ($this->executeAssoc()) {
            $this->setData($this->executeAssoc()[0]);

            // print_r($this->getData('firstname'));

            return true;
        }

        return null;
    }
}
