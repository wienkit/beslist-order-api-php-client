<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderProduct
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 */
class BeslistOrderProduct extends BaseModel {

    protected $xmlEntityName = 'product';

    protected $attributes = [
        'price',
        'shipping',
        'numberOrdered',
        'bvbCode',
        'size',
        'color',
        'title',
        'url'
    ];

    protected $nestedEntities = [
        'commission' => 'BeslistOrderProductCommission'
    ];

}
