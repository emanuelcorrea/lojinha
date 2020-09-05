<?php
namespace Src\Traits;

trait ProtectString
{
    public function protect($string)
    {
        if (!is_array($string)) {
            $string = preg_replace('/(from|select|insert|delete|where|drop|union|order|update|database)/i', '', $string);
            $string = preg_replace('/(&lt;|<)?script(\/?(&gt;|>(.*))?)/i', '', $string);
            $tbl = get_html_translation_table( HTML_ENTITIES );
            $tbl = array_flip( $tbl );
            $string = addslashes($string);
            $string = strip_tags($string);
            return strtr($string, $tbl);
        } else {
            return array_filter($string, "protect");
        }
    }
}
