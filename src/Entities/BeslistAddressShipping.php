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
        'company_name',
        'company_kvk',
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
