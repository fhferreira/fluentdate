<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\SeparatorFormatInterface;

class SeparatorSpace extends BaseFormat implements SeparatorFormatInterface
{
    public function getFormat(): string
    {
        return ' ';
    }
}
