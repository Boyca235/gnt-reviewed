<?php

namespace App\Data;

use App\Classes\Constant;
use App\Data\Data;
use Illuminate\Support\Facades\File;

class DocumentType extends Data
{
    const prefix = "/public/Docs/";

    const list = [];

    public function __construct()
    {
        parent::__construct();
        $this->list = self::list;
    }

    public static  function getStampSuffix(string $id): string
    {
        return parent::getItem($id)["stamp_suffix"];
    }

    public static function getFolderPath(string $id): string
    {
        $fileFolder = base_path() . parent::getItem($id)["folder_path"];

        if (!File::isDirectory($fileFolder)) {
            File::makeDirectory($fileFolder, 0777, true, true);
        }

        return $fileFolder;
    }
    public static function getDocumentTemplate(string $id): string
    {
        return parent::getItem($id)["template"];
    }
}
