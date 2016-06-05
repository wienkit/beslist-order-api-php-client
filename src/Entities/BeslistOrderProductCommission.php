<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderProductCommission
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 */
class BeslistOrderProductCommission extends BaseModel {

    protected $xmlEntityName = 'commission';

    protected $attributes = [
        'percentage',
        'fixed',
        'variable',
        'total'
    ];

}
