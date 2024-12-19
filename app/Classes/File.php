<?php

namespace App\Classes;

class File
{
    public function __construct(private string $type,
                                private string $filename)
    {
    }

    public function toArray(): array{
        return [
            "type" => $this->type,
            "filename" => $this->filename,
        ];
    }
}
