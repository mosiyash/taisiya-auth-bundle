<?php

namespace Taisiya\AuthBundle\Database\DefaultDatabase\UserinfoTable;

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
