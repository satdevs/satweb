<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
class ChPackage extends Entity{

    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
