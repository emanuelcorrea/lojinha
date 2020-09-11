<?php
namespace Src\Traits;

trait UrlParser
{
    // public function parserUrl()
    // {
    //     return explode('/', rtrim($_GET['url']), FILTER_SANITIZE_URL);
    // }

    public function parserUrl()
    {
        $url = '/';

        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        if (substr($url, -1) == '/') {
            $url = substr($url, 0, -1);
        }

        $url = $this->checkRoutes($url);

        $a = explode('/', $url);
        
        $a = array_values(array_filter($a));

        return $a;
    }

    private function checkRoutes($url) {
        global $routes;

        $find = false;

        foreach ($routes as $pt => $newurl) {
            
            $pattern = preg_replace('(\{[a-z0-9]{1,}\})', '([a-z0-9\-]+)', $pt);

            if (preg_match('#^('. $pattern .')*$#i', $url, $matches) === 1) {
                $itens = array();

                if (preg_match_all('(\{[a-z0-9]{1,}\})', $pt, $m)) {
                    $itens = preg_replace('(\{|\})', '', $m[0]);
                }

                $arg = array();

                foreach ($matches as $key => $match) {
                    if (isset($itens[$key])) {
                        $arg[$itens[$key]] = $match;
                    }
                }

                foreach ($arg as $argkey => $argvalue) {
                    $newurl = str_replace(':'.$argkey, $argvalue, $newurl);
                }

                $url = $newurl;
                $find = true;
                break;
                
            }
        }

        if (!$find) {
            echo 'deu erro';
            return header('Location: ' . DIR_PATH);
        }

        return $url;
    }
}
