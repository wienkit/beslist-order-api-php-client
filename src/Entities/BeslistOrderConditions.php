<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderConditions
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 * @property int $id
 * @property string $date
 * @property string $url
 * 
 */
class BeslistOrderConditions extends BaseModel {

    protected $xmlEntityName = 'conditions';

    protected $attributes = [
        'id',
        'date',
        'url'
    ];

}
