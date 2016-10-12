<?php

namespace Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable;

use Taisiya\PropelBundle\Database\Column;

class IdColumn extends Column
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'id';
    }
}
