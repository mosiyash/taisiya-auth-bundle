<?php

namespace Taisiya\AuthBundle\Database\DefaultDatabase\UserInfoTable;

use Taisiya\PropelBundle\Database\Column;

class AccountIdColumn extends Column
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'account_id';
    }
}
