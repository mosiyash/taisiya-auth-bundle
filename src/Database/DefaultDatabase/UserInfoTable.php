<?php

namespace Taisiya\AuthBundle\Database\DefaultDatabase;

use Taisiya\PropelBundle\Database\Table;

final class UserInfoTable extends Table
{
    /**
     * {@inheritdoc}
     */
    public static function getName(): string
    {
        return 'userinfo';
    }
}
