<?php

namespace App\Data;

use App\Pattern\Singleton;

class Data extends Singleton
{
    protected array $list = [];

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $id
     * @return bool
     */
    public static function exist($id): bool
    {
        return in_array($id, array_column(self::getInstance()->list(), "id"));
    }

    /**
     * @return array
     */
    protected function list(): array
    {
        return $this->list;
    }

    /**
     * @param $id
     * @return string|null
     */
    public static function getLabel($id): ?string
    {
        if ($item = self::getItem($id)) {
            return $item["label"];
        }

        return null;
    }

    public static function getLabels(): ?array
    {
        $list = self::getInstance()->list();
        foreach ($list as $key => $value) {
            $list[$key] = $value['label'];
        }
        return $list;
    }

    public static function getCodes(): ?array
    {
        $list = self::getInstance()->list();
        foreach ($list as $key => $value) {
            $list[$key] = $value['id'];
        }
        return $list;
    }

    /**
     * @param $id
     * @return array|null
     */
    public static function getItem($id): ?array
    {
        if (empty($id)) {
            return null;
        }

        $list = self::getInstance()->list();

        foreach ($list as $item) {
            if (strtolower($item["id"]) == strtolower($id)) {
                return $item;
            }
        }

        return null;
    }

    /**
     * @return array
     */
    public static function all(): array
    {
        return self::getInstance()->list();
    }
}