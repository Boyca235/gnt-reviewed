<?php

namespace App\Data;

use App\Classes\Constant;
use App\Data\Data;

class UserProfile extends Data
{
    const list = [
        [
            "id" => Constant::MANAGER,
            "label" => "Manager"
        ],
        [
            "id" => Constant::ADMIN,
            "label" => "Administrateur(trice)"
        ],
        [
            "id" => Constant::GUEST,
            "label" => "Invité(e)"
        ],
        [
            "id" => Constant::SUBSCRIBER,
            "label" => "Abonné(e)"
        ],
    ];

    public function __construct()
    {
        parent::__construct();
        $this->list = self::list;
    }
}
