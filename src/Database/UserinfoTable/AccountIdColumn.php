<?php

namespace Taisiya\AuthBundle\Database\UserinfoTable;

use Taisiya\PropelBundle\Database\AbstractColumn;

class AccountIdColumn extends AbstractColumn
{
    const NAME = 'account_id';

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
