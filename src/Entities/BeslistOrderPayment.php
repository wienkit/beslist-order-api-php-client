<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderPayment
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 */
class BeslistOrderPayment extends BaseModel {

    protected $xmlEntityName = 'payment';

    protected $attributes = [
        'method',
        'iban',
        'bic',
        'consumer_name',
        'status'
    ];

}
