<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderCustomer
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 */
class BeslistOrderCustomer extends BaseModel {

    protected $xmlEntityName = 'customer';

    protected $attributes = [
        'id',
        'email',
        'emailOptIn',
        'phone'
    ];

}
