<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderPayment
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 * @property string $method
 * @property string $iban
 * @property string $bic
 * @property string $consumer_name
 * @property string $status
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
