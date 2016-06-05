<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderConditions
 * @package Wienkit\BeslistOrdersClient\Entities
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
