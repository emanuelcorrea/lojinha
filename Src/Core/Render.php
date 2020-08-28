<?php
namespace Src\Core;

class Render
{
    private $title, $keywords, $description, $dir;

    public function renderTemplate()
    {
        require_once(DIR_REQ.'App/Views/template.php');
    }

    public function addHead()
    {
        if (file_exists(DIR_REQ."App/Views/{$this->getDir()}/head.php")) {
            require_once(DIR_REQ."App/Views/{$this->getDir()}/head.php");
        } else {
            require_once(DIR_REQ.'App/Views/templates/head.php');
        }
    }

    public function addHeader()
    {
        if (file_exists(DIR_REQ."App/Views/{$this->getDir()}/header.php")) {
            require_once(DIR_REQ."App/Views/{$this->getDir()}/header.php");
        } else {
            require_once(DIR_REQ.'App/Views/templates/header.php');
        }
    }

    public function addMain()
    {
        if (file_exists(DIR_REQ."App/Views/{$this->getDir()}/main.php")) {
            require_once(DIR_REQ."App/Views/{$this->getDir()}/main.php");
        } else {
            require_once(DIR_REQ.'App/Views/templates/main.php');
        }
    }

    public function addFooter()
    {
        if (file_exists(DIR_REQ."App/Views/{$this->getDir()}/footer.php")) {
            require_once(DIR_REQ."App/Views/{$this->getDir()}/footer.php");
        } else {
            require_once(DIR_REQ.'App/Views/templates/footer.php');
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getKeywords() {
        return $this->keywords;
    }

    public function setKeywords($keywords) {
        $this->keywords = $keywords;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDir() {
        return $this->dir;
    }

    public function setDir($dir) {
        $this->dir = $dir;
    }
}
