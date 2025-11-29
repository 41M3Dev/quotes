<?php

namespace Models;

require_once('libraries/autoload.php');

class Citation extends Model
{
    public function findTypes(string $cate): array
    {
        $check = $this->pdo->prepare("SELECT * from citations WHERE categorie = ? ");
        $check->execute(array($cate));
        $citation = $check->fetchAll();
        return $citation;
    }
}
