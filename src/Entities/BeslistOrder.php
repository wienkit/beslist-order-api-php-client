<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrder
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 * @property string $OrderId
 * @property string $DateTimeCustomer
 * @property string $DateTimeDropShipper
 * @property BolPlazaBuyer $Buyer
 * @property array $OrderItems
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
