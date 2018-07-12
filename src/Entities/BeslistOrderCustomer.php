<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderCustomer
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 * @property int $id
 * @property string $email
 * @property int $emailOptIn
 * @property string $phone 
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
