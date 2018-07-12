<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistAddressShipping
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 * @property string $company_name
 * @property string $company_kvk
 * @property string $firstName
 * @property string $lastNameInsertion
 * @property string $lastName
 * @property string $address
 * @property string $addressNumber
 * @property string $addressNumberAdditional
 * @property string $city
 * @property string $zip
 * @property string $country
 * @property string $sex
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
