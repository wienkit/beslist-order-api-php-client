<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrder
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 * @property string $orderNumber
 * @property string $shopOrderNumber
 * @property int $b2b
 * @property string $dateCreated
 * @property float $price
 * @property float $shipping
 * @property float $transactionCosts
 * @property float $commission
 * @property int $numProducts
 *
 * @property BeslistOrderPayment $payment
 * @property BeslistOrderConditions $conditions
 * @property BeslistOrderCustomer $customer
 * @property BeslistOrderAddresses $addresses 
 * 
 * @property BeslistOrderProduct[] $products
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
