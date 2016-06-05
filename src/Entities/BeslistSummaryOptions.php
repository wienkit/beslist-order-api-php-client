<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistSummaryOptions
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 */
class BeslistSummaryOptions extends BaseModel {

    protected $xmlEntityName = 'options';

    protected $attributes = [
        'shopID',
        'dateFrom',
        'dateTo'
    ];
}
