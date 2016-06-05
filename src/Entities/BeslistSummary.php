<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistSummary
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 */
class BeslistSummary extends BaseModel {

    protected $xmlEntityName = 'summary';

    protected $attributes = [
        'numResults'
    ];

    protected $nestedEntities = [
        'options' => 'BeslistSummaryOptions'
    ];
}
