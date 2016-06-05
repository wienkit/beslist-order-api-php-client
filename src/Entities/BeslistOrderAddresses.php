<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderAddresses
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 */
class BeslistOrderAddresses extends BaseModel {

    protected $xmlEntityName = 'addresses';

    protected $nestedEntities = [
        'shipping' => 'BeslistAddressShipping',
        'invoice' => 'BeslistAddressInvoice'
    ];
}
