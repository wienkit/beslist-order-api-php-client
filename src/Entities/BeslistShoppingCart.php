<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistShoppingCart
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 */
class BeslistShoppingCart extends BaseModel {

    protected $xmlEntityName = 'shoppingCart';

    protected $nestedEntities = [
        'summary' => 'BeslistSummary'
    ];

    protected $childEntities = [
        'shopOrders' => [
            'childName' => 'shopOrder',
            'entityClass' => 'BeslistOrder'
        ]
    ];
}
