<?php

namespace Taisiya\AuthBundle\Database\UserinfoTable;

use Taisiya\PropelBundle\Database\Column;

class EmailColumn extends Column
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'email';
    }
}