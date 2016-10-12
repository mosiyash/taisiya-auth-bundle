<?php

namespace Taisiya\AuthBundle\Database\DefaultDatabase;

use Taisiya\PropelBundle\Database\AbstractTable;
use Taisiya\PropelBundle\Database\Table;

final class AccountTable extends Table
{
    /**
     * {@inheritdoc}
     */
    public static function getName(): string
    {
        return 'account';
    }
}
