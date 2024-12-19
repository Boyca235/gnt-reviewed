<?php

namespace App\Helper;

use Exception;
use App\Data\DocumentType;
use App\Classes\Constant;

abstract class Tools
{
    public static function checkInternet(string $domain = "www.google.com", $port = 80): bool
    {
        $result = false;
        try {
            $connected = @fsockopen($domain, $port); //website, port  (try 80 or 443)
            if ($connected) {
                fclose($connected);
                $result = true;
            }
            return $result;
        } catch (Exception $ex) {
            echo "Error " . $ex->getMessage();
            return $result;
        }
    }

    public static function nextPosition(string $subCh, string $ch): int
    {
        return (int)substr($ch, strpos($ch, $subCh) + strlen($subCh)) + 1;
    }

    public static function buildDocName(string $docType, string $docExtension = Constant::PDF): string
    {
        return DocumentType::getLabel($docType) . "_" . uniqid() . "." . $docExtension;
    }

    // public static function buildFileName(string $fileType, string $fileExtension = Constant::PNG): string
    // {
    //     return FileType::getLabel($fileType) . "_" . uniqid() . "." . $fileExtension;
    // }
}