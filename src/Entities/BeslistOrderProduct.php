<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderProduct
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 * @property float $price
 * @property float $shipping
 * @property int $numberOrdered
 * @property string $bvbCode
 * @property string $size
 * @property string $color
 * @property string $title
 * @property string $url 
 * @property BeslistOrderProductCommission $commission 
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
