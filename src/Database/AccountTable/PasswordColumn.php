<?php

namespace Taisiya\AuthBundle\Database\AccountTable;

use Taisiya\PropelBundle\Database\AbstractColumn;

class PasswordColumn extends AbstractColumn
{
    const NAME = 'password';

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
