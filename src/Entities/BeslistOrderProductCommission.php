<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistOrderProductCommission
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 * @property float $percentage
 * @property float $fixed
 * @property float $variable
 * @property float $total
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
