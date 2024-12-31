<?php

namespace App\Data;

use App\Classes\Constant;

class AdvertiseType extends Data
{
    const list = [
        [
            "id" => Constant::BANNER,
            "label" => "Encarde"
        ],
        [
            "id" => Constant::COMMON_ADVERTISE,
            "label" => "Pubs Ordinaire"
        ],
        [
            "id" => Constant::VIDEO_ADS,
            "label" => "Vidéo pubs"
        ],
    ];

    public function __construct()
    {
        parent::__construct();
        $this->list = self::list;
    }
}