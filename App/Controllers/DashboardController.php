<?php
namespace App\Controllers;

use App\Models\DashboardModel;
use Src\Core\Render;

class DashboardController extends Render
{
    protected $dashboard;
    protected $name;
    
    public function __construct()
    {
        $this->dashboard = new DashboardModel();
    }

    public function index()
    {
        if (!$_SESSION['logged'])
            return header('Location: ' . DIR_PATH . 'dashboard/login/');

        $this->setDir('dashboard');
        $this->setTitle('Página Inicial - Painel Adminstrativo | Lojinha');
        $this->renderTemplate();
    }

    public function login()
    {
        if (isset($_POST['user_admin']) && isset($_POST['password_admin'])) {
            if (!empty($_POST['user_admin']) || !empty($_POST['password_admin'])) {
                $this->dashboard->authenticate($_POST['user_admin'], $_POST['password_admin']);
            }
        }
        
        if (!isset($_SESSION['logged']) || !$_SESSION['logged']) {
            $this->setDir('dashboard/login');
            $this->setTitle('Login - Painel Administrativo | Lojinha');
            $this->renderTemplate();
        } else {
            $this->dashboard->authenticate($_POST['user_admin'], $_POST['password_admin']);
            header('Location: ' . DIR_PATH . 'dashboard/');
        }
    }

    public function logoff()
    {
        unset($_SESSION);
        session_destroy();

        header('Location: ' . DIR_PATH . 'dashboard/');
    }
}
