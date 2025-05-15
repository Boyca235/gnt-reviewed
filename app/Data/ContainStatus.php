<?php

namespace App\Data;

use App\Classes\Constant;

class ContainStatus extends Data
{
    const list = [
        [
            "id" => Constant::ACTIVE,
            "label" => "Active"
        ],
        [
            "id" => Constant::WAITING,
            "label" => "En attente"
        ],
        [
            "id" => Constant::EXPIRED,
            "label" => "Expirés(es)"
        ],
        [
            "id" => Constant::REMOVED,
            "label" => "Rétirés(es)"
        ],
    ];

    public function __construct()
    {
        parent::__construct();
        $this->list = self::list;
    }
}
