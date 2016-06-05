<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistAddressShipping
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 */
class BeslistAddressShipping extends BaseModel {

    protected $xmlEntityName = 'shipping';

    protected $attributes = [
        'firstName',
        'lastNameInsertion',
        'lastName',
        'address',
        'addressNumber',
        'addressNumberAdditional',
        'city',
        'zip',
        'country',
        'sex'
    ];

}
