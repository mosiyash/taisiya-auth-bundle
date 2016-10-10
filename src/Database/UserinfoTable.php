<?php

namespace Taisiya\AuthBundle\Database;

use Taisiya\PropelBundle\Database\AbstractTable;

final class UserinfoTable extends AbstractTable
{
    const NAME = 'userinfo';

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
