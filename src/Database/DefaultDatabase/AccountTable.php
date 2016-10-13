<?php

namespace Taisiya\AuthBundle\Database\DefaultDatabase;

use Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable\IdColumn;
use Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable\PasswordColumn;
use Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable\UsernameColumn;
use Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable\UsernameUnique;
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

    public function __construct()
    {
        $this->createColumnIfNotExists(new IdColumn());
        $this->createColumnIfNotExists(new UsernameColumn());
        $this->createColumnIfNotExists(new PasswordColumn());

        $this->addUnique(new UsernameUnique());
    }
}
