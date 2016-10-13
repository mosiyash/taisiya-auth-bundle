<?php

namespace Taisiya\AuthBundle\Database\DefaultDatabase\UserInfoTable;

use Taisiya\PropelBundle\Database\Column;

class FullnameColumn extends Column
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'fullname';
    }
}
