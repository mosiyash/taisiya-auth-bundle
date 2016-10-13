<?php

namespace Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable;

use Taisiya\PropelBundle\Database\Unique;

class UsernameUnique extends Unique
{
    public static function getName(): string
    {
        return 'username';
    }

    public function __construct()
    {
        $this->addColumnIfNotExists(new UsernameColumn());
    }
}

