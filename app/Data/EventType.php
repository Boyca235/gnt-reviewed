<?php

namespace App\Data;

use App\Classes\Constant;

class EventType extends Data
{
    const list = [
        [
            "id" => Constant::EVENTS,
            "label" => "Événement"
        ],
        [
            "id" => Constant::MEET,
            "label" => "Rencontre"
        ],
        [
            "id" => Constant::ONLINE_MEET,
            "label" => "Rencontre en ligne"
        ],
        [
            "id" => Constant::ENTERTAINMENT,
            "label" => "Divertissement"
        ],
        [
            "id" => Constant::NEWS,
            "label" => "Nouveautés"
        ],
    ];

    public function __construct()
    {
        parent::__construct();
        $this->list = self::list;
    }
}
