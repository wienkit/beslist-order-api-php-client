<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrder
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 */
class BeslistOrder extends BaseModel {

    protected $xmlEntityName = 'shopOrder';

    protected $attributes = [
        'orderNumber',
        'shopOrderNumber',
        'b2b',
        'dateCreated',
        'price',
        'shipping',
        'transactionCosts',
        'commission',
        'numProducts'
    ];

    protected $nestedEntities = [
        'payment' => 'BeslistOrderPayment',
        'conditions' => 'BeslistOrderConditions',
        'customer' => 'BeslistOrderCustomer',
        'addresses' => 'BeslistOrderAddresses'
    ];

    protected $childEntities = [
        'products' => [
            'childName' => 'product',
            'entityClass' => 'BeslistOrderProduct'
        ]
    ];
}
