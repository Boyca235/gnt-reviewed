<?php

namespace App\Data;

use App\Classes\Constant;

class ContainType extends Data
{
    const list = [
        [
            "id" => Constant::NEWS,
            "label" => "Nouvelles"
        ],
        [
            "id" => Constant::PUBLISHEMENT,
            "label" => "Publication"
        ],
        [
            "id" => Constant::TRENDING,
            "label" => "Tendance"
        ],
        [
            "id" => Constant::NEWSLETTER,
            "label" => "News Letter"
        ]
    ];

    public function __construct()
    {
        parent::__construct();
        $this->list = self::list;
    }
}