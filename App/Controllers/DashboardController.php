<?php
namespace App\Controllers;

use Src\Core\Render;

class DashboardController extends Render
{
    public function index()
    {
        if (!$_SESSION['logged']) {
            header('Location: ' . DIR_PATH . 'dashboard/login/');
        }

        echo 'Logado';
    }

    public function login($oi)
    {
        if (empty($_POST['user_admin']) || empty($_POST['password_admin'])) {
            $this->setDir('dashboard');
            $this->setTitle('Painel Administrativo');
            $this->renderTemplate();
        } else {
            $user_admin = $this->protect($_POST['user_admin']);
            $password_admin = $this->protect($_POST['password_admin']);
            
            $_SESSION['logged'] = true;
            
            header('Location: ' . DIR_PATH . 'dashboard/');
        }
    }

    function protect( $str ) {
        /*** Função para retornar uma string/Array protegidos contra SQL/Blind/XSS Injection*/
        if( !is_array( $str ) ) {                      
                $str = preg_replace( '/(from|select|insert|delete|where|drop|union|order|update|database)/i', '', $str );
                $str = preg_replace( '/(&lt;|<)?script(\/?(&gt;|>(.*))?)/i', '', $str );
                $tbl = get_html_translation_table( HTML_ENTITIES );
                $tbl = array_flip( $tbl );
                $str = addslashes( $str );
                $str = strip_tags( $str );
                return strtr( $str, $tbl );
        } else {
                return array_filter( $str, "protect" );
        }
    }
}
