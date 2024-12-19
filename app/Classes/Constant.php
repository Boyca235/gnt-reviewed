<?php

namespace App\Classes;

abstract class Constant
{
    const PDF = "pdf";
    const JPG = "jpg";
    const PNG = "png";
    const JPEG = "jpeg";
    const ALLOWED_FILE_EXTENSIONS = [self::PDF, self::PNG, self::JPG, self::JPEG];
    const DATE_FORMAT_YMD = "Y-m-d";
    const DATE_FORMAT_YMD_HIS = "Y-m-d H:i:s";
    const RECEIVED = "received";
    const INVOICE = "invoice";
    const ENCRYPTION = "N@ws2025";
    const PER_PAGE = 10;
    const NEWS = "news";
    const NEWSLETTER = "newsletter";
    const PUBLISHEMENT = "publishement";
    const TRENDING = "trending";
    const ENTERTAINMENT = "entertainment";
    const ADVERTISE = "advertise";
    const MANAGER = "manager";
    const ADMIN = "administrator";
    const MEET = "meet";
    const EVENTS = "events";
    const ONLINE_MEET = "online_meet";
    // Define priority of contain to display either on top or last
    const MAJOR = "major";
    const NORMAL = "normal";
    const MINOR = "minor";
    const HIGHT = "hight";
    const LOW = "low";
    // End priority definition
    const HEAD_BANNER = "head_banner";
    const LEFT_SIDE_BANNER = "left_side_banner";
    const RIGHT_SIDE_BANNER = "right_side_banner";
    const MIDDLE_BANNER = "middle_banner";
    const BOTTOM_BANNER = "bottom_banner";
    const COMMON_ADVERTISE = "common_advertise";
}