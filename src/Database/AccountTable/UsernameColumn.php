<?php

namespace Taisiya\AuthBundle\Database\AccountTable;

use Taisiya\PropelBundle\Database\AbstractColumn;

class UsernameColumn extends AbstractColumn
{
    const NAME = 'username';

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
