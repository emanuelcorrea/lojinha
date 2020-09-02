<?php
namespace Src\Core;

use Src\Core\Connection;
use PDO, PDOException;

abstract class Crud extends Connection
{
    private $table, $query, $stmt;

    public function __construct($table = false)
    {
        $this->table = $table;
    }

    public function selectObject()
    {
        try {
            $this->setQuery(
                "SELECT * FROM {$this->table}"
            );

            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return $this->stmt->fetchAll(PDO::FETCH_OBJ);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function selectAssoc()
    {
        try {
            $this->setQuery(
                "SELECT * FROM {$this->table}"
            );

            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function selectOneObject($id)
    {
        try {
            $this->setQuery(
                "SELECT * FROM {$this->table} WHERE id_receita = $id"
            );

            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return $this->stmt->fetch(PDO::FETCH_OBJ);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function selectBy($table)
    {
        try {
            $this->setQuery(
                "SELECT * FROM $table"
            );

            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    public function execute()
    {
        try {
            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function executeAssoc()
    {
        try {
            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function executeQuery()
    {
        try {
            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return $this->stmt->fetchAll(PDO::FETCH_OBJ);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function executeObject()
    {
        try {
            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return $this->stmt->fetchAll(PDO::FETCH_OBJ);
            } else {
                return false;
            }

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function loadObject($value, $attr)
    {
        if (empty($attr)) {
            return false;
        }

        $this->setQuery(
            "SELECT * FROM products WHERE $attr = $value;"
        );

        return $this->executeObject();
    }

    public function update($data)
    {
        try {
            $this->setQuery(
                "UPDATE products SET img = '{$data['img']}', nome = '{$data['nome']}', ingredientes = '{$data['ingredientes']}', categoria = '{$data['categoria']}', preparo = '{$data['preparo']}' WHERE id_receita = {$data['id']}"
            );
            
            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                header("Location: ". DIR_PATH);
            } else {
                $_SESSION['msg'] = "Erro.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit;
        }
    }

    public function insert($data)
    {
        try {
            $this->setQuery(
                "INSERT INTO products (img, nome, ingredientes, categoria, preparo, cor, slug, dia, hora) VALUES ('{$data['img']}', '{$data['nome']}', '{$data['ingredientes']}', '{$data['categoria']}', '{$data['preparo']}', '{$data['cor']}', '{$data['slug']}', CURDATE(), CURTIME())"
            );

            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                header("Location: " . DIR_PATH . "painel");
            } else {
                $_SESSION['msg'] = "Erro ao adicionar.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $this->setQuery(
                "DELETE FROM {$this->table} WHERE id_{$this->table} = $id"
            );

            $this->stmt = parent::conn()->prepare($this->getQuery());
            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                header("Location: " . DIR_PATH . "painel");
            } else {
                false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit;
        }
    }

    public function getQuery() {
        return $this->query;
    }

    public function setQuery($query) {
        $this->query = $query;
    }

    public function getStmt() {
        return $this->stmt;
    }

    public function setStmt($stmt) {
        $this->stmt = $stmt;
    }

    //todo Cria o slug a partir do nome do produto
    public static function createSlug($titulo)
    {
        $replace = [
            '&lt;' => '', '&gt;' => '', '&#039;' => '', '&amp;' => '',
            '&quot;' => '', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'Ae',
            '&Auml;' => 'A', 'Å' => 'A', 'Ā' => 'A', 'Ą' => 'A', 'Ă' => 'A', 'Æ' => 'Ae',
            'Ç' => 'C', 'Ć' => 'C', 'Č' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C', 'Ď' => 'D', 'Đ' => 'D',
            'Ð' => 'D', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ē' => 'E',
            'Ę' => 'E', 'Ě' => 'E', 'Ĕ' => 'E', 'Ė' => 'E', 'Ĝ' => 'G', 'Ğ' => 'G',
            'Ġ' => 'G', 'Ģ' => 'G', 'Ĥ' => 'H', 'Ħ' => 'H', 'Ì' => 'I', 'Í' => 'I',
            'Î' => 'I', 'Ï' => 'I', 'Ī' => 'I', 'Ĩ' => 'I', 'Ĭ' => 'I', 'Į' => 'I',
            'İ' => 'I', 'Ĳ' => 'IJ', 'Ĵ' => 'J', 'Ķ' => 'K', 'Ł' => 'K', 'Ľ' => 'K',
            'Ĺ' => 'K', 'Ļ' => 'K', 'Ŀ' => 'K', 'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N',
            'Ņ' => 'N', 'Ŋ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O',
            'Ö' => 'Oe', '&Ouml;' => 'Oe', 'Ø' => 'O', 'Ō' => 'O', 'Ő' => 'O', 'Ŏ' => 'O',
            'Œ' => 'OE', 'Ŕ' => 'R', 'Ř' => 'R', 'Ŗ' => 'R', 'Ś' => 'S', 'Š' => 'S',
            'Ş' => 'S', 'Ŝ' => 'S', 'Ș' => 'S', 'Ť' => 'T', 'Ţ' => 'T', 'Ŧ' => 'T',
            'Ț' => 'T', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'Ue', 'Ū' => 'U',
            '&Uuml;' => 'Ue', 'Ů' => 'U', 'Ű' => 'U', 'Ŭ' => 'U', 'Ũ' => 'U', 'Ų' => 'U',
            'Ŵ' => 'W', 'Ý' => 'Y', 'Ŷ' => 'Y', 'Ÿ' => 'Y', 'Ź' => 'Z', 'Ž' => 'Z',
            'Ż' => 'Z', 'Þ' => 'T', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a',
            'ä' => 'ae', '&auml;' => 'ae', 'å' => 'a', 'ā' => 'a', 'ą' => 'a', 'ă' => 'a',
            'æ' => 'ae', 'ç' => 'c', 'ć' => 'c', 'č' => 'c', 'ĉ' => 'c', 'ċ' => 'c',
            'ď' => 'd', 'đ' => 'd', 'ð' => 'd', 'è' => 'e', 'é' => 'e', 'ê' => 'e',
            'ë' => 'e', 'ē' => 'e', 'ę' => 'e', 'ě' => 'e', 'ĕ' => 'e', 'ė' => 'e',
            'ƒ' => 'f', 'ĝ' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g', 'ĥ' => 'h',
            'ħ' => 'h', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ī' => 'i',
            'ĩ' => 'i', 'ĭ' => 'i', 'į' => 'i', 'ı' => 'i', 'ĳ' => 'ij', 'ĵ' => 'j',
            'ķ' => 'k', 'ĸ' => 'k', 'ł' => 'l', 'ľ' => 'l', 'ĺ' => 'l', 'ļ' => 'l',
            'ŀ' => 'l', 'ñ' => 'n', 'ń' => 'n', 'ň' => 'n', 'ņ' => 'n', 'ŉ' => 'n',
            'ŋ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'oe',
            '&ouml;' => 'oe', 'ø' => 'o', 'ō' => 'o', 'ő' => 'o', 'ŏ' => 'o', 'œ' => 'oe',
            'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r', 'š' => 's', 'ù' => 'u', 'ú' => 'u',
            'û' => 'u', 'ü' => 'ue', 'ū' => 'u', '&uuml;' => 'ue', 'ů' => 'u', 'ű' => 'u',
            'ŭ' => 'u', 'ũ' => 'u', 'ų' => 'u', 'ŵ' => 'w', 'ý' => 'y', 'ÿ' => 'y',
            'ŷ' => 'y', 'ž' => 'z', 'ż' => 'z', 'ź' => 'z', 'þ' => 't', 'ß' => 'ss',
            'ſ' => 'ss', 'ый' => 'iy', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G',
            'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO', 'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I',
            'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
            'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F',
            'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH', 'Ъ' => '',
            'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA', 'а' => 'a',
            'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
            'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l',
            'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's',
            'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
            'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e',
            'ю' => 'yu', 'я' => 'ya'
        ];

        // make a human readable string
        $titulo = strtr($titulo, $replace, true);

        // replace non letter or digits by -
        $titulo = preg_replace('~[^\\pL\d.]+~u', '-', $titulo);

        // trim
        $titulo = trim($titulo, '-');

        // remove unwanted characters
        $titulo = preg_replace('~[^-\w.]+~', '', $titulo);

        $slug = strtolower($titulo);

        return $slug;
    }
}
