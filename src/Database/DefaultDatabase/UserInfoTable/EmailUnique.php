<?php

namespace Taisiya\AuthBundle\Database\DefaultDatabase\UserInfoTable;

use Taisiya\PropelBundle\Database\Unique;

class EmailUnique extends Unique
{
    public static function getName(): string
    {
        return 'email';
    }

    public function __construct()
    {
        $this->addColumnIfNotExists(new EmailColumn());
    }
}
