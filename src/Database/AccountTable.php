<?php

namespace Taisiya\AuthBundle\Database;

use Taisiya\PropelBundle\Database\AbstractTable;

final class AccountTable extends AbstractTable
{
    const NAME = 'account';

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
