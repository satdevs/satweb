<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
class Pdfinvoice extends Entity{

    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
