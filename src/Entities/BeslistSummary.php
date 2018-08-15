<?php

namespace Wienkit\BeslistOrdersClient\Entities;

/**
 * Class BeslistSummary
 * @package Wienkit\BeslistOrdersClient\Entities
 *
 * @property int $numResults
 * @property BeslistSummaryOptions $options
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
