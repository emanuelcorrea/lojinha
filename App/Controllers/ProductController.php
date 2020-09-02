<?php
namespace App\Controllers;

use App\Models\ProductModel;
use Src\Traits\UrlParser;
use Src\Core\Render;

class ProductController extends Render
{
    use UrlParser;

    protected $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }
    
    public function slug(string $slug)
    {
        $slug = $this->protect($slug);
        
        $this->product->loadBy('slug', $slug);

        $this->setDir('product');
        $this->setTitle($this->product->getName());
        $this->renderTemplate();
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

    public function getModel()
    {
        return $this->model;
    }
}
